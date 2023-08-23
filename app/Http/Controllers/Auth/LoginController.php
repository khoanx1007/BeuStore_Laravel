<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginAdminRequest;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function adminLoginView()
    {
        return view('auth.login_admin');
    }
    public function authenticateAdmin(LoginAdminRequest $request)
    {
        $staff = Staff::where('email',$request->input('email'))->first();
        if($staff && $staff->status == Staff::STATUS['DE_ACTIVE']){
            return back()->withErrors([
                'login' => 'Tài khoản của bạn đã bị khóa'
            ])->withInput();
        }
        $email = $request->get('email');
        $password = $request->get('password');
        if (Auth::guard('admin')->attempt(array('email' => $email,'password' => $password,'status' => Staff::STATUS['ACTIVE']))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        return back()->withErrors([
            'login' => 'Thông tin đăng nhập không chính xác'
        ])->withInput();
    }
    public function authenticateUser(LoginUserRequest $request){

    }
}
