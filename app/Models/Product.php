<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; 
use Cviebrock\EloquentSluggable\Sluggable; 

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'created_at',
        'updated_at',
    ];
    public $timestamps=true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const STATUS_HIDE = 0;
    const STATUS_SHOW = 1;
    public function getStatusTextAttribute(){
        if($this->status == self::STATUS_SHOW){
            $name = 'Còn hàng';
        }
        else{
            $name = 'Hết hàng';
        }
        return $name;
    }
    public function getMyImageAttribute(){
        $url = Storage::disk($this->disk)->url($this->image);
        return $url;
    }
    public function setNameAttribute($name){
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }

    public function images(){
        return $this->hasMany(Image::class,'product_id');
    }
    public function requirements(){
        return $this->hasMany(Requirement::class,'product_id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_created_id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function tags2(){
        return $this->hasMany(Tag::class,'product_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
