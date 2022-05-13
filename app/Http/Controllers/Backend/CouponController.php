<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Toastr;
use Illuminate\Support\Str;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::get();
        return view('backend.coupons.index')->with([
            'coupons'=>$coupons
        ]);
    }
    // public function index2()
    // {
    //     $categories = Category::onlyTrashed()->paginate(3); 
    //     return view('backend.categories.index2')->with([
    //         'categories'=>$categories
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.coupons.create');
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
        $coupon = new Coupon();
        $coupon->name = $data['name'];
        $coupon->type = $data['type'];
        $coupon->qty = $data['qty'];
        $coupon->discount = $data['discount'];
        $coupon->save();
        // $request->session()->flash('success','Tạo danh mục thành công');
        Toastr::success('Tạo thành công','Thành công');
        return redirect()->route('backend.coupons.index');
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
        $coupon = Coupon::find($id);
        return view('backend.coupons.edit')->with([
            'coupon'=> $coupon
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
        $coupon = Coupon::find($id);
        $coupon->name = $coupon['name'];
        $coupon->discount = $coupon['discount'];
        $coupon->type = $coupon['type'];
        $coupon->qty = $coupon['qty'];
        $coupon->save();
        Toastr::success('Cập nhật danh mục thành công','Thành công');
        return redirect()->route('backend.coupons.index');
    }
    public function destroy(Request $request,$id)
    {
        Coupon::destroy($id);
        Toastr::success('Xoá danh mục thành công','Thành công');
        return redirect()->route('backend.coupons.index');
    }
}
