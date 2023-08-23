<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Str;
use Toastr;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerUser(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->status = User::STATUS['UN_CONFIRM'];
        $user->gender = (int)$request->input('gender');
        $user->phone = $request->input('phone');
        $code = Str::random(8);
        while (User::where('code', $code)->count() > 0) {
            $code = Str::random(8);
        }
        $user->code = $code;
        $user->save();
        DB::commit();
        Mail::send('admin.emails.confirm-account', compact('user'), function ($email) use ($user) {
            $email->subject('Xác nhận đăng ký tài khoản');
            $email->to($user->email, 'Xác nhận đăng ký tài khoản');
        });
        $request->session()->flash('success', 'Đăng ký tài khoản thành công, vui lòng kiểm tra email của bạn !');
        return redirect()->route('user.login');
    }
    public function confirm(Request $request, $code)
    {
        $user = User::where('code', $code)->first();
        if ($user && $user->status == User::STATUS['UN_CONFIRM']) {
            $user->status = User::STATUS['ACTIVE'];
            $user->save();
            DB::commit();
            $request->session()->flash('success', 'Xác nhận email đăng ký tài khoản thành công !');
        } else {
            $request->session()->flash('error', 'Có lỗi xảy ra !');
        }
        return redirect()->route('user.login')->withInput();
    }
}
