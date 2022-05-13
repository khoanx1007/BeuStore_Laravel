<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use App\Models\Brand;

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
    
    public function select(Request $request)
    {
        $data = $request->all();
        if ($data['action']){
            $output='';
            if($data['action'] == "province"){
                $select_district = District::where('matp',$data['ma_id'])->orderby('maqh','ASC')->get();
                foreach($select_district as $key => $district){
                    $output.='<option value="' . $district->maqh.'">'.$district->name.'</option>';
                }
            }
            else{
                $select_ward = Ward::where('maqh',$data['ma_id'])->orderby('maxa','ASC')->get();
                foreach($select_ward as $key => $ward){
                    $output.='<option value="'.$ward->maxa.'">'.$ward->name.'</option>';
                }
            }
        }
        echo $output;
    }
}
