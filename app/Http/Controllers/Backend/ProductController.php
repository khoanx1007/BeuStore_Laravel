<?php

namespace App\Http\Controllers\Backend;
use App\Models\Product;
use App\Models\User;
use App\Models\Tag;
use App\Models\Brand;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Redirect,Response;
use Toastr;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if(request()->ajax()) {
        //     return datatables()->of(Product::select('*'))
        //     ->addColumn('action', 'backend.products.action')
        //     ->rawColumns(['action'])
        //     ->addIndexColumn()
        //     ->make(true);
        // }
        // return view('backend.products.index');
        $products = Product::get();
        
        // if ($request->ajax()) {
        //     $data = Product::get();
        //     return Datatables::of($data)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){
   
        //                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm edit-product">Edit</a>';
   
        //                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm delete-product">Delete</a>';
    
        //                     return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
      
        return view('backend.products.index',compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::get();
        $categories=Category::get();
        $brands=Brand::get();
        return view('backend.products.create',[
            'tags' => $tags,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tags = $request->get('tags');
        $brand = $request->get('brand');
        $categories=$request->get('categories');
        $data = $request->all();
        $product = new Product();
        if($request->hasFile('image')){
            $disk='public';
            $path= $request->file('image')->store('images',$disk);
            $product->disk=$disk;
            $product->image=$path;   
        }
        $product->name = $data['name'];
        $product->price_origin = $data['price_origin'];
        $product->price_sale = $data['price_sale'];
        $product->description = $data['description'];
        $product->status = '1';
        $product->brand_id = $brand;
        $product->save();
        $product->tags()->attach($tags);
        $product->categories()->attach($categories);
        Toastr::success('Tạo bài viết thành công','Thành công');
        return redirect()->route('backend.products.index');
        // $productId = $request->product_id;
        // $product   = Product::updateOrCreate(['id' => $productId],
        //             [
        //                 'name' => $request->name,
        //                 'originprice' => $request->originprice, 
        //                 'saleprice' => $request->saleprice, 
        //                 'description' => $request->description,
        //                 'category_id' => $request->category_id,
        //                 'status' => '1',
        //             ]);        
        // return Response::json(['success'=>'Tạo sản phẩm thành công']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $tags=Tag::get();
        $categories=Category::get();
        $brands=Brand::get();
        return view('backend.products.edit')->with([
            'product'=>$product,
            'tags' => $tags,
            'categories' => $categories,
            'brands' => $brands,           
        ]);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        $tags = $request->get('tags');
        $brand = $request->get('brand');
        $categories = $request->get('categories');
        if($request->hasFile('image')){
            $disk='public';
            $path= $request->file('image')->store('images',$disk);
            $product->disk=$disk;
            $product->image=$path;   
        }
        $product->name = $data['name'];
        $product->price_origin = $data['price_origin'];
        $product->price_sale = $data['price_sale'];
        $product->description = $data['description'];
        $product->status = '1';
        $product->brand_id = $brand;
        $product->tags()->sync($tags);
        $product->categories()->sync($categories);
        $product->save();
        Toastr::success('Cập nhật bài viết thành công','Thành công');
        return redirect()->route('backend.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        Toastr::success('Xoá sản phẩm thành công','Thành công');
        return redirect()->route('backend.products.index');
    }
}
