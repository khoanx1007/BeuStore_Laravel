<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $fillable = ['product_name','product_qty','product_price','product_img','product_coupon'];
    protected $primaryKey = 'id';
    protected $table = 'orders_product';
}
