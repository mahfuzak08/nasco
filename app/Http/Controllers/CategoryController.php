<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Page;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!empty(request()->input('id')) && request()->input('delete') == 'yes'){
            activity()->log('Category delete requested');
            try{
                $cat = Category::findOrFail(request()->input('id'));
                $str = "$cat->id :: $cat->cat_name category delete ";
                $cat->delete();
                activity()->log($str . 'successfully');
                flash()->addSuccess($str . 'successfully');
                return redirect('category');
            }catch (\Exception $e) {
                dd($e);
                flash()->addError($e);
            }
        }
        if(!empty(request()->input('id')) && request()->input('edit') == 'yes'){
            $pages = Page::where('section_name', 'main')->get();
            $categories = Category::all();
            $cat = Category::findOrFail(request()->input('id'));
            $page_body = 'cat_edit';
            activity()->log('Category edit page open.');
            return view('admin.product.index', compact('categories', 'cat', 'pages', 'page_body'));
        }
        activity()->log('Categories page open');
        $pages = Page::where('section_name', 'main')->get();
        $categories = Category::all();
        $page_body = 'cat_index';
        return view('admin.product.index', compact('categories','pages', 'page_body'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        activity()->log('Category create page open');
        $pages = Page::where('section_name', 'main')->get();
        $categories = Category::all();
        $page_body = 'cat_create';
        return view('admin.product.index', compact('categories','pages', 'page_body'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'cat_name' => 'required|string|max:255',
            'parent' => 'nullable|integer',
        ]);

        if($request->id){
            $category = Category::findOrFail($request->id);
            $category->update([
                'cat_name' => $request->cat_name,
                'parent' => $request->parent ?? 0,
            ]);
            activity()->log('Category update successfully.');
            flash()->addSuccess('Category update successfully.');
        }else{
            Category::create([
                'cat_name' => $request->cat_name,
                'parent' => $request->parent ?? 0,
            ]);
            activity()->log('Category created successfully.');
            flash()->addSuccess('Category created successfully.');
        }
        return redirect('category');
    }
}