<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Product;
use Toastr;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::paginate(8);
        $images=Image::get();
        return view('backend.images.index')->with(
            [
                'products'=>$products,
                'images'=>$images,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::get();
        return view('backend.images.create',[
            'products' => $products
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
        $product = $request->get('product');
        $data = $request->all();
        $image = new Image();
        if($request->hasFile('image')){
            $disk='public';
            $path= $request->file('image')->store('images',$disk);
            $image->disk=$disk;
            $image->image=$path;   
        }
        $image->product_id = $product;
        $image->save();
        Toastr::success('Chỉnh sửa ảnh thành công','Thành công');
        return redirect()->route('backend.images.index');
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
    public function edit(Image $image)
    {
        $products=Product::get();
        return view('backend.images.edit',[
            'image' => $image,
            'products' => $products
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $product = $request->get('product');
        $data = $request->all();
        if($request->hasFile('image')){
            $disk='public';
            $path= $request->file('image')->store('images',$disk);
            $image->disk=$disk;
            $image->image=$path;   
        }
        $image->product_id = $product;
        $image->save();
        Toastr::success('Thêm ảnh thành công','Thành công');
        return redirect()->route('backend.images.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::find($id)->delete();
        Toastr::success('Xoá ảnh thành công','Thành công');
        return redirect()->route('backend.images.index');
    }
}
