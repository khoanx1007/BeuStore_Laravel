<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    use HasFactory;
    protected $fillable = ['name','user_id','first_name','last_name','email','phone','province','district','ward','notes','order_product'];
    protected $primaryKey = 'id';
    protected $table = 'orders_info';
    public function my_province(){
        return $this->belongsTo(Province::class,'province');
    }
    public function my_district(){
        return $this->belongsTo(District::class,'district');
    }
    public function my_ward(){
        return $this->belongsTo(Ward::class,'ward');
    }
    public function my_coupon(){
        return $this->belongsTo(Coupon::class,'coupon');
    }

}
