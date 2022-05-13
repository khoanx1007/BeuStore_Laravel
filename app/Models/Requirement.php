<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage; 

class Requirement extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function getMyImageAttribute(){
        $url = Storage::disk($this->disk)->url($this->image);
        return $url;
    }
}
