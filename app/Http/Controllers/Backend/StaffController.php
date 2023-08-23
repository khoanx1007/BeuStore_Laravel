<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Staff\StoreStaffRequest;
use App\Http\Requests\Backend\Staff\UpdateStaffRequest;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Toastr;

class StaffController extends Controller
{
    public function index(Request $request)
    {

        $staffs = Staff::where('id','!=', Auth::guard('admin')->id())->paginate(10);
        $name = \request()->get('name');
        if(!empty($name)){
        $staffs = Staff::where('name', 'LIKE', '%' . $name . '%')
        ->orWhere('email', 'LIKE', '%' . $name . '%')->paginate(10);
        }
        return view('backend.staffs.index')->with([
            'staffs' => $staffs
        ]);
    }
    public function reloadTable()
    {
        $staffs = Staff::where('id','!=', Auth::guard('admin')->id())->paginate(10);
        return view('backend.partials.staff_table')->with([
            'staffs' => $staffs
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request)
    {
        $data = $request->all();
        $staff = new Staff();
        $staff->name = $data['name'];
        $staff->email = $data['email'];
        $staff->address = $data['address'];
        $staff->phone = $data['phone'];
        $staff->gender = $data['gender'];
        if($request->has('role')){
            $staff->role = $data['role'];
        }
        $staff->status= config('global.STATUS_UNLOCKED');
        $staff->password = Hash::make(config('global.DEFAULT_PASS'));
        $staff->save();
        $request->session()->flash('success', 'Tạo tài khoản nhân viên thành công');
        return redirect()->route('backend.staffs.index');
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('backend.staffs.edit')->with([
            'staff' => $staff
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, $id)
    {
        $data = $request->all();
        $staff = Staff::findOrFail($id);
        $staff->name = $data['name'];
        $staff->email = $data['email'];
        $staff->address = $data['address'];
        $staff->phone = $data['phone'];
        $staff->gender = $data['gender'];
        if($request->has('role')){
            $staff->role = $data['role'];
        }
        $staff->save();
        $request->session()->flash('success', 'Cập nhật tài khoản nhân viên thành công');
        return redirect()->route('backend.staffs.index');
    }
    public function lock(Request $request,$id)
    {
        $staff = Staff::find($id);
        if($staff->status)
        {
            $staff->status = config('global.STATUS_LOCKED');
        }else
        {
            $staff->status = config('global.STATUS_UNLOCKED');
        }
        $staff->save();
        return response()->json([
            'staff_status' =>  $staff->status,
            'status' => 200,
        ]);
    }
    public function destroy(Request $request,$id)
    {
        Staff::where('id',$id)->delete();
        $request->session()->flash('success', 'Xoá nhân viên thành công');
        return redirect()->route('backend.staffs.index');
    }
}
