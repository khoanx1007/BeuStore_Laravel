<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class ForgotPasswordController extends Controller
{
    public function resetPasswordAdmin(Request $request)
    {
        $email = $request->get('email');
        $staff = Staff::where('email', $email)->first();
        $password = Str::random(8);
        $staff->password = $password;
        Mail::send('emails.reset-password',compact('staff'),function($email) use($staff){
            $email->subject('Xác nhận đặt lại mật khẩu');
            $email->to($staff->email,'Xác nhận đặt lại mật khẩu');
        });
        $staff->password = Hash::make($password);
        $staff->save();
        $request->session()->flash('success', 'Gửi email thành công');
        return redirect()->back();
    }
}
