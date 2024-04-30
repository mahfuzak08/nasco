<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\User;

class SettingsController extends Controller
{
    /**
     * User Management
     */
    public function user_manage(){
        $pages = Page::where('section_name', 'main')->get();
        if(! empty(request()->input('search'))){
            $str = request()->input('search');
            $datas = User::where(function ($query) use ($str){
                                $query->where('name', 'like', '%'.$str.'%')
                                ->orWhere('mobile', 'like', '%'.$str.'%')
                                ->orWhere('email', 'like', '%'.$str.'%')
                                ->orWhere('role', 'like', '%'.$str.'%');
                            })
                            ->latest()->paginate(10)->withQueryString();
        }else{
            $datas = User::latest()->paginate(10)->withQueryString();
        }
        return view('admin.settings.users', compact('datas', 'pages'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function see_user($id){
        $pages = Page::where('section_name', 'main')->get();
        $user = User::findOrFail($id);
        return view('admin.settings.user-details', compact('user', 'pages'));
    }
    
    public function edit_user($id){
        $pages = Page::where('section_name', 'main')->get();
        $user = User::findOrFail($id);
        return view('admin.settings.user-edit', compact('user', 'pages'));
    }
    
    public function open_user_form(){
        $pages = Page::where('section_name', 'main')->get();
        return view('admin.settings.user-addnew', compact('pages'));
    }
    
    public function update_user(Request $request, $id){
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'digits:13'],
            'email' => ['email', 'nullable']
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->messages()->toArray() as $key => $value) { 
                flash()->addError($value[0]);
            }
            return redirect($request->input('redirect_url'));
        }
        
        DB::beginTransaction();
        try{
            $data = User::findOrFail($id);
            
            $input = $request->all();
            $data->update($input);

            DB::commit();
            // If all queries succeed, commit the transaction
            flash()->addSuccess('Data Update Successfully.');
        }catch (\Exception $e) {
            // If any query fails, catch the exception and roll back the transaction
            flash()->addError('Data Not Updated Successfully.');
            DB::rollback();
        }
        return redirect('user_manage');
    }
    // End User Management
}
