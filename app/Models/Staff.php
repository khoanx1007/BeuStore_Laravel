<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Staff extends Model implements Authenticatable
{
    protected $table = 'staffs';
    use HasFactory, AuthenticableTrait;
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
        'gender',
        'status',
        'role',
    ];
    const ROLE_ADMIN = 'admin';
    const ROLE_EDITOR = 'editor';
    static $roleArr = [
        self::ROLE_ADMIN => 'admin',
        self::ROLE_EDITOR => 'editor',
    ];
    const STATUS = [
        'DE_ACTIVE' => 0,
        'ACTIVE' => 1
    ];
    public function getRoleTextAttribute()
    {
        if ($this->role == 'admin') {
            return 'Quản trị viên';
        } elseif ($this->role == 'editor') {
            return 'Biên tập viên';
        }
    }
    public function getStatusTextAttribute()
    {
        if ($this->status === 0) {
            return 'Chưa kích hoạt';
        } else{
            return 'Đã kích hoạt';
        }
    }

    public function getGenderTextAttribute()
    {
        if ($this->gender == '1') {
            return 'Nam';
        } elseif ($this->gender == '2') {
            return 'Nữ';
        }
    }
}
