<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','type','matp'];
    protected $primaryKey = 'matp';
    protected $table = 'a_provinces';
    public function ordersinfo(){
        return $this->hasMany(OrderInfo::class);
    }
}
