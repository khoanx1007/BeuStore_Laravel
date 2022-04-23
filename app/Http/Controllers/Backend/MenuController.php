<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Toastr;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.menus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = $request->only(['name']);
            $menu = new Menu();
            $menu->name = $data['name'];
            $menu->save(); 
            // $request->session()->flash('success','Tạo Menu thành công'); 
            Toastr::success('Tạo Menu thành công','Thành công');
            return redirect()->route('backend.menus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {

        return view('backend.menus.edit')->with([
            'menu'=>$menu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Menu $menu)
    {
        $data = $request->only(['name']);
        $menu->name = $data['name'];
        $menu->save(); 
        $request->session()->flash('success','Chỉnh sửa Menu thành công'); 
        return redirect()->route('backend.menus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Menu::where('id',$id)->delete();
        // $request->session()->flash('success','Xoá Menu thành công'); 
        Toastr::success('Xoá Menu thành công','Thành công');
        return redirect()->route('backend.menus.index');
    }
}
