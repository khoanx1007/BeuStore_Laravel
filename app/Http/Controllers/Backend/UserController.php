<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Toastr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = \request()->get('email');
        $name = \request()->get('name');
        $users_query = User::orderBy('id', 'desc')->select('*');
        if (!empty($email)) {
            $users_query = $users_query->where('email', "LIKE", "%$email%");
        }
        if (!empty($name)) {
            $users_query = $users_query->where('name', "LIKE", "%$name%");
        }
        $users =  $users_query->paginate(5);
        return view('backend.users.index')->with([
            'users' => $users
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get('name') == null) {
            return redirect()->back();
        } else {
            $data = $request->only(['name', 'email', 'password']);

            $user = new User();
            if ($request->hasFile('image')) {
                $disk = 'public';
                $path = $request->file('image')->store('avatars', $disk);
                $user->disk = $disk;
                $user->image = $path;
            }
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->status = '1';
            $user->save();
            return redirect()->route('backend.users.index');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.users.edit')->with([
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only('name');
        $user = User::find($id);
        if ($request->hasFile('image')) {
            $disk = 'public';
            $path = $request->file('image')->store('avatars', $disk);
            $user->disk = $disk;
            $user->image = $path;
        }
        $user->name = $data['name'];
        // $user->email = $data['email'];
        // $user->password = $data['password'];
        $user->save();
        return redirect()->route('backend.users.index');
    }
    public function destroy($id)
    {

        $user = User::find($id);
        User::destroy($id);
        return redirect()->route('backend.users.index');
    }
    public function restore($id)
    {
        $user = User::withTrashed()->find($id);
        $user->restore($id);
        return redirect()->route('backend.users.index2');
    }
}
