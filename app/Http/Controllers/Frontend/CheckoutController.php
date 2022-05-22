<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use App\Models\OrderInfo;
use App\Models\OrderProduct;
use App\Models\Brand;
use Session;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $brands=Brand::get();
        $provinces=Province::orderby('matp','ASC')->get();
        return view('frontend.checkout.index')
        ->with([
            'brands' => $brands,
            'provinces' => $provinces,
        ]);
    }
    public function saveOrder(Request $request)
    {
        $checkout_code = substr(md5(microtime()),rand(0,26),5);
        $data=$request->all();
        $order= new OrderInfo();
        $order->first_name = $data['fName'];
        $order->last_name = $data['lName'];
        $order->email = $data['email'];
        $order->phone = $data['phone'];
        $order->province = $data['province'];
        $order->district = $data['district'];
        $order->ward = $data['ward'];
        $order->coupon = $data['coupon']; 
        $order->order_product = $checkout_code;
        $order->notes = $data['message']; 
        $order->save();
        
        if(Session::get('cart')){
            foreach(Session::get('cart') as $key => $cart){
                $orderdetail = new OrderProduct();
                $orderdetail->product_id = $cart['product_id'];
                $orderdetail->product_name = $cart['product_name'];
                $orderdetail->product_qty = $cart['product_qty'];
                $orderdetail->product_price = $cart['product_price'];
                $orderdetail->product_img = $cart['product_image'];
                $orderdetail->order_code= $checkout_code; 
                $orderdetail->save();
            }
        }
        Session::forget('coupon');
        Session::forget('cart');
    }
    
    public function select(Request $request)
    {
        $data = $request->all();
        if ($data['action']){
            $output='';
            if($data['action'] == "province"){
                $select_district = District::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                    $output='<option>Chọn quận / huyện</option>';
                foreach($select_district as $key => $district){
                    $output.='<option value="' . $district->maqh.'">'.$district->name.'</option>';
                }
            }
            else{
                $select_ward = Ward::where('maqh',$data['ma_id'])->orderby('maxa','ASC')->get();
                    $output='<option>Chọn xã / phường</option>';
                foreach($select_ward as $key => $ward){
                    $output.='<option value="'.$ward->maxa.'">'.$ward->name.'</option>';
                }
            }
        }
        echo $output;
    }
}
