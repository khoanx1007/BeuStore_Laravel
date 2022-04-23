<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Toastr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('backend.categories.index')->with([
            'categories'=>$categories
        ]);
    }
    public function index2()
    {
        $categories = Category::onlyTrashed()->paginate(3); 
        return view('backend.categories.index2')->with([
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validated =$request->validate([
            'name' => 'required|unique:categories|max:20',
            'content' => 'required'
        ]);
        $data = $request->only(['name','content']);
        $category = Category::create([
            'name' => $data['name'],
            'content'=> $data['content'],
        ]);
        // $request->session()->flash('success','Tạo danh mục thành công');
        Toastr::success('Tạo danh mục thành công','Thành công');
        return redirect()->route('backend.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        return view('backend.categories.edit')->with([
            'category'=> $category
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
        $validated =$request->validate([
            'name' => 'required|unique:categories|max:20',
            'content' => 'required'
        ]);
        $data = $request->only(['name','content']);
        $category = Category::find($id);
        $category->name = $data['name'];
        $category->content = $data['content'];
        $category->save();
        Toastr::success('Cập nhật danh mục thành công','Thành công');
        return redirect()->route('backend.categories.index');
    }
    public function destroy(Request $request,$id)
    {
        Category::destroy($id);
        Toastr::success('Xoá danh mục thành công','Thành công');
        return redirect()->route('backend.categories.index');
    }
    public function restore(Request $request,$id)
    {
        $category=Category::withTrashed()->find($id);
        $category->restore();
        Toastr::success('Khôi phục danh mục thành công','Thành công');
        return redirect()->route('backend.categories.index2');
    }

}
