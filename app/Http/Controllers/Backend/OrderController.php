<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderInfo;
use App\Models\Coupon;
use App\Models\OrderProduct;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OrderInfo::orderBy('created_at','DESC')->get();
        return view('backend.orders.index')->with([
            'orders'=>$orders
        ]);
    }
    public function show($order_code)
    {
        $order=OrderInfo::where('order_product',$order_code)->get();
        $products=OrderProduct::where('order_code',$order_code)->get();
        $coupons = Coupon::get();
        
        return view('backend.orders.show')->with([
            'products'=>$products,
            'order'=>$order,
            'coupons'=>$coupons,
        ]);
    }
    public function destroy($order_code)
    {
        $order_detail = OrderInfo::where('order_product',$order_code)->delete();
        $data=OrderProduct::where('order_code',$order_code)->delete();
        return redirect()->route('backend.orders.index');
    }
}
