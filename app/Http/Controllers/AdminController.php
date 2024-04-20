<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Page;

class AdminController extends Controller
{
    public function dashboard(){
        activity()->log('Logged in');
        $pages = Page::where('section_name', 'main')->get();
        return view('admin.home', compact('pages'));
    }
    
    public function page(){
        // dd(request()->all());
        activity()->log('Open page route');
        $pageid = request()->input('pid');
        if(!empty(request()->input('t')) && request()->input('t') == 'd'){
            $p = Page::where('id', request()->input('sid'))->get();
            // dd($p[0]['value2']);
            if(!empty($p[0]['value2'])){
                try{
                    // Check if the file exists
                    $path = str_replace('storage', 'public', $p[0]['value2']);
                    // dd(Storage::exists($path));
                    if (Storage::exists($path)) {
                        // Delete the file
                        Storage::delete($path);
                        flash()->addSuccess("File deleted successfully.");
                    } else {
                        flash()->addError("File does not exist.");
                    }    
                }catch (\Exception $e) {
                    dd($e);
                    flash()->addError($e);
                }
            }
            // dd($p);
            $p[0]->delete();
            flash()->addSuccess('Section delete Successfully.');
            return redirect('page?pid='.$pageid);
        }
        $page=''; $section=''; $sectiongroup=''; $edititem='';

        if(!empty(request()->input('t')) && request()->input('t') == 'e'){
            $edititem = Page::findOrFail(request()->input('sid'));
        }
        if(!empty($pageid)){
            $page = Page::findOrFail($pageid);
            $section = Page::where('page_name', $page->page_name)->get();
            $sectiongroup = Page::where('page_name', $page->page_name)->select('section_name')->groupBy('section_name')->get();
        }

        $pages = Page::where('section_name', 'main')->get();

        return view('admin.page', compact('page', 'pages', 'section', 'sectiongroup', 'edititem'));
    }

    public function save_section(Request $request){
        $rules = [
            'page_name' => ['required', 'string', 'max:255'],
            'section_name' => ['required', 'string', 'max:255'],
            'key' => ['required', 'string', 'max:255'],
            'value' => ['required', 'string']
        ];
        if ($request->hasFile('photo')) {
            $rules['photo'] = ['required', 'file', 'max:1024'];
            if($request->input('section_name') == 'Recent Project'){
                $rules['photo'][2] = 'max:15360';
            }
        }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->messages()->toArray() as $key => $value) { 
                flash()->addError($value[0]);
            }
            return redirect('page?pid='.$request->input('pid'));
        }
        try{
            if(!empty($request->input('id'))){
                $data = Page::findOrFail($request->input('id'));
            }else{
                $data = new Page();
            }
            $input = $request->all();
            $input['user_id'] = Auth::id();
            $input['status'] = 'draft';
            $input['authorize_by'] = 0;
            if ($request->hasFile('photo')) {
                // Store the uploaded file in the storage/app/public directory
                $path = $request->file('photo')->storeAs('public', time().".".$request->photo->extension());
                $input['value2'] = str_replace('public', 'storage', $path);
            }
            
            $data->fill($input)->save();
            flash()->addSuccess('Page Data Added/ Update Successfully.');
            \Log::info('Flash message added: Page Data Added/Update Successfully.');
        }catch (\Exception $e) {
            dd($e);
            flash()->addError('Page Data Not Added Successfully.');
        }
        return redirect('page?pid='.$request->input('pid'));
    }
}
