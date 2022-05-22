<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Toastr;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::get();
        return view('backend.brands.index')->with([
            'brands'=>$brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // $validated =$request->validate([
        //     'name' => 'required|unique:categories|max:20',
        // ]);
        $data = $request->all();
        $brand = new Brand();
        if($request->hasFile('image')){
            $disk='public';
            $path= $request->file('image')->store('brands',$disk);
            $brand->disk=$disk;
            $brand->image=$path;   
        }
        $brand->name = $data['name'];
        $brand->save();
        // $request->session()->flash('success','Tạo danh mục thành công');
        Toastr::success('Tạo thành công','Thành công');
        return redirect()->route('backend.brands.index');
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
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brands.edit')->with([
            'brand'=> $brand
        ]);
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
        // $validated =$request->validate([
        //     'name' => 'required|unique:categories|max:20',
        //     'content' => 'required'
        // ]);
        $data = $request->all();
        $brand = Brand::find($id);
        if($request->hasFile('image')){
            $disk='public';
            $path= $request->file('image')->store('brands',$disk);
            $brand->disk=$disk;
            $brand->image=$path;   
        }
        $brand->name = $brand['name'];
        $brand->save();
        Toastr::success('Cập nhật danh mục thành công','Thành công');
        return redirect()->route('backend.brands.index');
    }
    public function destroy(Request $request,$id)
    {
        Brand::destroy($id);
        Toastr::success('Xoá danh mục thành công','Thành công');
        return redirect()->route('backend.brands.index');
    }
}
