<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
        'gender',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 0;
    const STATUS = [
        'ACTIVE' => 1,
        'DE_ACTIVE' => 0,
        'UN_CONFIRM' => 2
    ];
    static $genderArr = [
        self::GENDER_MALE => '1',
        self::GENDER_FEMALE => '0'
    ];
    public $genderTextArr = [
        self::GENDER_MALE => 'Nam',
        self::GENDER_FEMALE => 'Nữ'
    ];
    protected $statusArr = [
        self::STATUS['ACTIVE'] => 'Tài khoản đang hoạt động',
        self::STATUS['DE_ACTIVE'] => 'Tài khoản bị khoá',
        self::STATUS['UN_CONFIRM'] => 'Chưa kích hoạt'
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getStatusTextAttribute()
    {
        if ($this->status == self::STATUS['ACTIVE']) {
            $name = 'Tài khoản đang hoạt động';
        } else if ($this->status == self::STATUS['UN_CONFIRM']) {
            $name = 'Chưa kích hoạt';
        } else {
            $name = 'Tài khoản bị khoá';
        }
        return $name;
    }
    public function getGenderTextAttribute()
    {
        if ($this->gender == self::GENDER_MALE) {
            $name = 'Nam';
        } else {
            $name = 'Nữ';
        }
        return $name;
    }
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    public function userInfo()
    {
        return $this->hasOne(UserInfo::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class, 'id');
    }
}
