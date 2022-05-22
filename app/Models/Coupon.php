<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    public function getTypeCouponAttribute(){
        if($this->type == '1'){
            $name = 'Giảm theo phần trăm';
        }
        else{
            $name = 'Giảm theo giá tiền';
        }
        return $name;
    }
    public function ordersinfo(){
        return $this->hasMany(OrderInfo::class);
    }
}
