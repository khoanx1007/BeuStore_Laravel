<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Requirement;
use App\Models\Product;
use Toastr;

class RequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::get();
        $requirements=Requirement::get();
        return view('backend.requirements.index')->with(
            [
                'products'=>$products,
                'requirements'=>$requirements,
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
        return view('backend.requirements.create',[
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
        $requirement = new Requirement();
        $requirement->product_id = $product;
        $requirement->min_sys = $data['min_sys'];
        $requirement->sug_sys = $data['sug_sys'];
        $requirement->gameplay = $data['gameplay'];
        $requirement->save();
        Toastr::success('Thêm yêu cầu thành công','Thành công');
        return redirect()->route('backend.requirements.index');
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
    public function edit(Requirement $requirement)
    {
        $products=Product::get();
        return view('backend.requirements.edit',[
            'requirement' => $requirement,
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
    public function update(Request $request, Requirement $requirement)
    {
        $product = $request->get('product');
        $data = $request->all();
        if($request->hasFile('image')){
            $disk='public';
            $path= $request->file('image')->store('images',$disk);
            $image->disk=$disk;
            $image->image=$path;   
        }
        $requirement->product_id = $product;
        $requirement->save();
        Toastr::success('Thêm thành công','Thành công');
        return redirect()->route('backend.requirements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Requirement::find($id)->delete();
        Toastr::success('Xoá thành công','Thành công');
        return redirect()->route('backend.requirements.index');
    }
}
