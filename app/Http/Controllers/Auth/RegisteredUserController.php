<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Toastr;
use Illuminate\Support\Facades\Storage;


class RegisteredUserController extends Controller
{
    public function create()
    {

        return view('auth.register');
    }
    public function registerUser(RegisterRequest $request)
    {
        $data = $request->all();
        // $request->validate([
        //     'name'=>['required','string','max:255'],
        //     'email'=>['required','string','email','max:255','unique:users'],
        //     'password'=>['required','confirmed',Rules\Password::defaults()],
        // ]);
        $content = Storage::disk('public')->path('basic.jpg');
        $path = Storage::disk('public')->putFile('avatars', new File($content));
        $disk = 'public';
        $user = new User();
        $user->disk = $disk;
        $user->image = $path;



        // $user->disk=$disk;
        // $user->image=$path;       
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->role = 'Customer';
        $user->save();
        Toastr::success('Tạo tài khoản thành công', 'Thành công');
        return redirect('/login');
    }
}
