<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\Setting\UpdateInfoRequest;
use App\Http\Requests\Backend\Setting\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;

class SettingController extends Controller
{
    public function saveInfo(UpdateInfoRequest $request,$id){
        DB::beginTransaction();
        try{
            $data = $request->all();
            $staff = Staff::findOrFail($id);
            $staff->name = $data['name'];
            $staff->address = $data['address'];
            $staff->gender = $data['gender'];
            $staff->phone = $data['phone'];
            $staff->update();
            $request->session()->flash('success','Chỉnh sửa thông tin thành công');
            DB::commit();   
            return redirect()->back();
        }catch (\Exception $exception){
            DB::rollBack();
            \Log::error([
                'method' => __METHOD__,
                'line' => __LINE__,
                'message' => $exception->getMessage(),
                'user_id' => Auth::id(),
                'data' => $request->all()
            ]);
            $request->session()->flash('error','Chỉnh sửa thông tin không thành công');
            return redirect()->back();
        }
    }
    public function changePassword(){

    }
}
