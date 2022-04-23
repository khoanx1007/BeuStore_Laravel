<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage; 

class Post extends Model
{
    use HasFactory,SoftDeletes;
    public  $table='posts';
    protected $fillable = [
        'title',
        'description',
        'content',
        'slug',
        'user_created_id',
        'category_id',
        'status'
    ];
    public $timestamps=true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const STATUS_HIDE = 0;
    const STATUS_SHOW = 1;
    public function getStatusTextAttribute(){
        if($this->status == self::STATUS_SHOW){
            $name = 'Public';
        }
        else{
            $name = 'Draft';
        }
        return $name;
    }
    public function getMyImageAttribute(){
        $url = Storage::disk($this->disk)->url($this->image);
        return $url;
    }
    public function setTitleAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_created_id');
    }
    public function userUpdate(){
        return $this->belongsTo(User::class,'user_updated_id');
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
