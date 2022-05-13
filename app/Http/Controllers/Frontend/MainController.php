<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_pc = Category::where('name','PC')->get();
        $categories_console= Category::where('name','Console')->get();
        $categories_switch = Category::where('name','Switch')->get();
        $brands = Brand::get();
        $tags= Tag::get();
        $tags_new= Tag::where('name','Mới')->get();
        $products = Product::get();
        return view('frontend.main.index')->with([
            'products'=>$products,
            'categories_switch'=>$categories_switch,
            'categories_pc'=>$categories_pc,
            'categories_console'=>$categories_console,
            'brands' => $brands,
            'tags' => $tags,
            'tags_new' => $tags_new,
        ]);
    }
    public function info(Product $product)
    {
        $images=Image::get();
        $brands=Brand::get();
        return view('frontend.main.article')->with([
            'product'=>$product,
            'images' =>$images,
            'brands' =>$brands,
        ]);
    }
    public function shop()
    {
        $my_products=Product::paginate(8);
        $images=Image::get();
        $brands=Brand::get();
        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by == 'giam_dan'){
                $my_products = Product::orderBy('price_origin','DESC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'tang_dan'){
                $my_products = Product::orderBy('price_origin','ASC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'new'){
                $my_products = Product::orderBy('created_at','DESC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'old'){
                $my_products = Product::orderBy('created_at','ASC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'az'){
                $my_products = Product::orderBy('name','ASC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'za'){
                $my_products = Product::orderBy('name','DESC')->paginate(8)->appends(request()->query());
            }
            else{
                $my_products = Product::orderBy('id','DESC')->paginate(8)->appends(request()->query());
            }
        }
        return view('frontend.main.shop')->with([
            'my_products'=>$my_products,
            'images' =>$images,
            'brands' =>$brands,
        ]);
    }
    public function add(Product $product)
    {
        return view('frontend.carts.cart')->with([
            'product'=>$product,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
