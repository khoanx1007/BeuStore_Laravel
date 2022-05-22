<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['comment','comment_name','comment_email','comment_product_id','comment_status','comment_reply','created_at'];
    protected $primaryKey = 'id';
    protected $table = 'comments'; 
    public function product(){
        return $this->belongsTo(Product::class,'comment_product_id');
    }
}
