<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!empty(request()->input('id')) && request()->input('delete') == 'yes'){
            activity()->log('Product delete requested');
            try{
                $product = Product::findOrFail(request()->input('id'));
                $str = "$product->id :: $product->name product delete ";
                $product->delete();
                activity()->log($str . 'successfully');
                flash()->addSuccess($str . 'successfully');
                return redirect('product');
            }catch (\Exception $e) {
                dd($e);
                flash()->addError($e);
            }
        }
        if(!empty(request()->input('id')) && request()->input('edit') == 'yes'){
            $pages = Page::where('section_name', 'main')->get();
            $categories = Category::all();
            $product = Product::findOrFail(request()->input('id'));
            $page_body = 'product_edit';
            activity()->log('Product edit page open.');
            return view('admin.product.index', compact('categories', 'product', 'pages', 'page_body'));
        }
        activity()->log('Product page open');
        $pages = Page::where('section_name', 'main')->get();
        $products = Product::join('categories', 'products.cat_id', '=', 'categories.id')
                            ->select('products.*','categories.cat_name')
                            ->get();
        $page_body = 'product_index';
        return view('admin.product.index', compact('products','pages', 'page_body'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        activity()->log('Product create page open');
        $pages = Page::where('section_name', 'main')->get();
        $categories = Category::all();
        $page_body = 'product_create';
        return view('admin.product.index', compact('categories','pages', 'page_body'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'cat_id' => ['required']
        ];
        if ($request->hasFile('photo')) {
            $rules['photo'] = ['required', 'file', 'max:1024'];
        }
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            foreach ($validator->messages()->toArray() as $key => $value) { 
                flash()->addError($value[0]);
            }
            return redirect('addProduct');
        }

        try{
            if ($request->hasFile('photo')) {
                // Store the uploaded file in the storage/app/public directory
                $path = $request->file('photo')->storeAs('public', time().".".$request->photo->extension());
                $image = str_replace('public', 'storage', $path);
            }
            if($request->input('oldPhoto')){
                $image = $request->input('oldPhoto');
            }
            if(!empty($request->input('id'))){
                $data = Product::findOrFail($request->input('id'));
            }else{
                $data = new Product();
            }
            // Get specifications from request as an array
            $specifications = $request->input('specifications', []);
            $features = $request->input('features', []);

            // Convert the specifications array into a comma-separated string
            $speStr = $specifications ? implode('**@**', $specifications) : '';
            $feaStr = $features ? implode('**@**', $features) : '';
            
            $input = array(
                'name' => $request->name,
                'cat_id' => $request->cat_id,
                'details' => $request->details ?? '',
                'specifications' => $speStr,
                'features' => $feaStr,
                'price' => $request->price ?? 0,
                'image' => $image ?? '',
                'user_id' => Auth::id()
            );
            $data->fill($input)->save();
            activity()->log('Product add / update successfully.');
            flash()->addSuccess('Product add / update successfully.');
            return redirect('product');
        }catch (\Exception $e) {
            dd($e);
            flash()->addError($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
