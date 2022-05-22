<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','type','maqh'];
    protected $primaryKey = 'maxa';
    protected $table = 'a_wards';
    public function ordersinfo(){
        return $this->hasMany(OrderInfo::class);
    }
}
