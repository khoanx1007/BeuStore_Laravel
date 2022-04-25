<?php

namespace App\Http\Controllers\Backend;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Datatables;
use Toastr;

class PostController extends Controller
{
    /**
     * Create a controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->authorizeResource(Post::class,'post');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // $title=\request()->get('title');
        // $status=\request()->get('status');
        // $posts_query = Post::orderBy('id','desc')->select('*');
        // if (!empty($title)){
        //     $posts_query = $posts_query->where('title',"LIKE","%$title%");
        // }
        // if (!empty($status)){
        //     $posts_query = $posts_query->where('status',"LIKE","%$status%");   
        // }
        $posts =Post::get();
        return view('backend.posts.index')->with([
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tags=Tag::get();
        $categories=Category::get();
        $post=Post::with('user','category','tags')->find($id);
        return view('backend.posts.show',[
            'post' => $post,
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    public function create()
    {

        $tags=Tag::get();
        $categories=Category::get();
        return view('backend.posts.create',[
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    public function store(StorePostRequest $request)
    {
            // $validator =$request->validate([
            //     'title' => 'required|unique:posts|min:20|max:255',
            //     'content' => 'required'
            // ]);
            // $validator = Validator::make($request->all(),[
            //     'title' => 'required|unique:posts|min:20|max:255',
            //      'content' => 'required'
            // ],
            // [
            //    'title.required' => 'Phần tiêu đề không được để trống',
            //    'title.min' => 'Phần tiêu đề cần ít nhất 20 kí tự ',
            //    'content.required' => 'Phần nội dung không được để trống'  
            // ]
            // );
            // if ($validator->fails()){
            //     return redirect('backend/posts/create')
            //     ->withErrors($validator)
            //     ->withInput();
            // }

            $tags = $request->get('tags');
            $category = $request->get('category');
            $data = $request->only(['title','content','description']);
            $post = new Post();
            if($request->hasFile('image')){
                $disk='public';
                $path= $request->file('image')->store('images',$disk);
                $post->disk=$disk;
                $post->image=$path;   
            }
            $post->title = $data['title'];
            $post->category_id = $category;
            $post->content = $data['content'];
            $post->description = $data['description'];
            $post->status = '1';
            $post->save(); 
            // $user = User::find(1);
            // $user->posts()->save($post);
            $post->tags()->attach($tags);      
            Toastr::success('Tạo bài viết thành công','Thành công');
            return redirect()->route('backend.posts.index');
            // $data=Post::create($request->all());
            // return reponse()->json(['data'=>$data,'message'=>'Tạo thành công'],200);
    }

    public function edit(Post $post)
    {
        
        // $post = Post::find($id);
        $tags = Tag::get();
        $categories = Category::get(); 
        return view('backend.posts.edit')->with([
            'post'=>$post,
            'tags'=>$tags,
            'categories'=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //$post = Post::find($id);
        // if ($request->user()->cannot('create',Post::class)){
        //     abort(403);
        // }
        // $validator = Validator::make($request->all(),[
        //     'title' => 'required|min:20|max:255',
        //      'content' => 'required'
        // ],
        // [
        //    'title.required' => 'Phần tiêu đề không được để trống',
        //    'title.min' => 'Phần tiêu đề cần ít nhất 20 kí tự ',
        //    'content.required' => 'Phần nội dung không được để trống'  
        // ]
        // );
        // if ($validator->fails()){
        //     return redirect()->back()
        //     ->withErrors($validator)
        //     ->withInput();
        // }
        $data = $request->only(['title','content','description']);
        $tags = $request->get('tags');
        if($request->hasFile('image')){
            $disk='public';
            $path= $request->file('image')->store('images',$disk);
            $post->disk=$disk;
            $post->image=$path;   
        }
        $category_id = $request->get('category');
        $post->title = $data['title'];
        $post->content = $data['content'];
        $post->description = $data['description'];
        $post->tags()->sync($tags);
        $post->category_id = $category_id;
        $post->save();
        Toastr::success('Cập nhật bài viết thành công','Thành công');
        return redirect()->route('backend.posts.index');
    }
    public function destroy(Request $request,$id)
    {
        Post::where('id',$id)->delete();
        Toastr::success('Xoá bài viết thành công','Thành công');
        return redirect()->route('backend.posts.index');
    }

}
