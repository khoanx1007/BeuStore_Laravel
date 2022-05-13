<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'content',
        'slug',
    ];
    public function setNameAttribute($name){
        $this->attributes['name'] = $name;
        $this->attributes['slug'] = Str::slug($name);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function products2(){
        return $this->belongsToMany(Product::class);
    }
}
