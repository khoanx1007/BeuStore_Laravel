<?php

namespace App\Http\Controllers\Frontend;

use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\Brand;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Toastr;

class CartController extends Controller
{
    public function addajax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key => $val){
                if($val['product_id'] == $data['cart_product_id']){
                    $is_avaiable+=1;
                    $cart[$key]['product_qty']+=1;
                    Session::put('cart',$cart);
                }
            }
            if($is_avaiable == 0){
                $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],

            );
            Session::put('cart',$cart);
        }
        Session::save();

    }  
    public function indexajax(Request $request)
    {
        $brands=Brand::get();
        $coupondbs = Coupon::get();
        $url =  $request->url();
        return view('frontend.carts.cartajax')
        ->with([
            'brands' => $brands,
        ]);
    }
    public function add(Request $request,$id)
    {   
        $product = Product::find($id);
        $qty= $request->qty;
        $data['id']=$product->id;
        $data['qty']=$qty;
        $data['name']=$product->name;
        $data['price']=$product->price_origin;
        $data['weight']=$product->price_origin;
        $data['options']['image']=$product->my_image;
        Cart::add($data);
        Cart::setGlobalTax(10);
        // Cart::add($product->id,$product->name,1,$product->price_origin);
        return redirect()->route('frontend.carts.index');
    }
    public function update(Request $request)
    {   
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true){
            foreach ($data['cart_qty'] as $key => $qty){
                foreach($cart as $session => $val){
                    if($val['session_id']==$key){
                        $cart[$session]['product_qty']=$qty;
                    }
                }
            }
        }
        Session::put('cart',$cart);
        Toastr::success('Cập nhật giỏ hàng thành công','Thành công');
        return redirect()->back()->with('message','Cập nhật giỏ hàng thành công');
    }
    public function index(){
        $products = Cart::content();
        $brands=Brand::get();
        $coupondbs = Coupon::get();
        return view('frontend.carts.index')
        ->with([
            'products' => $products,
            'brands' => $brands,
            'coupondbs' => $coupondbs,
        ]);
        
    }
    public function checkcp(Request $request){
        $data = $request->all();
        $coupon = Coupon::where('name',$data['coupon'])->first();
        if($coupon)
        {
            $count_coupon = $coupon->count();
            if($count_coupon>0){
                $coupon_session = Session::get('coupon');
                if($coupon_session==true){
                    $is_avaiable=0;
                    if($is_avaiable==0){
                        $cou[] = array(
                            'coupon_code'=>$coupon->name,
                            'coupon_condition'=>$coupon->type,
                            'coupon_price'=>$coupon->discount,
                        );
                        Session::put('coupon',$cou);
                    }
                }    
                else{
                    $cou[] = array(
                        'coupon_code'=>$coupon->name,
                        'coupon_condition'=>$coupon->type,
                        'coupon_price'=>$coupon->discount,
                    );
                    Session::put('coupon',$cou);
                }
                Session::save();
                Toastr::success('Thêm mã giảm giá thành công','Thành công');
                return redirect()->back();
            }
        }
        else{
            Toastr::error('Mã giảm giá không đúng','Thất bại');
            return redirect()->back();
        }
    }
    public function delete($session_id){
        $cart = Session::get('cart');
        if($cart==true){
            foreach ($cart as $key => $val){
                if($val['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
        }
        Session::put('cart',$cart);
        Toastr::success('Xoá giỏ hàng thành công','Thành công');
        return redirect()->route('frontend.carts.indexajax');
    }
    public function clearAll(){
        $cart = Session::get('cart');
        if($cart==true){
            Session::forget('cart');
            Toastr::success('Xoá toàn bộ giỏ hàng thành công','Thành công');
            return redirect()->back();
        }
        
    }
    
}
