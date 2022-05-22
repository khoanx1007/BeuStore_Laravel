<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Toastr;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('comment_reply',0)->orderBy('id','DESC')->paginate(8);
        $comment = Comment::get();
        return view('backend.comments.index')->with([
            'comments'=>$comments,
            'comment'=>$comment,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function reply_comment(Request $request)
    {
        $data=$request->all();
        $comment = new Comment();
        $comment->comment = $data['comment_reply'];
        $comment->comment_product_id = $data['comment_product_id'];
        $comment->comment_reply = $data['comment_id'];
        $comment->comment_status = 0;
        $comment->comment_name = "Beustore";
        $comment->comment_email = auth()->user()->email;
        $comment->save();
    }
    public function check_comment(Request $request)
    {
        $data=$request->all();
        $comment = Comment::find($data['comment_id']);
        $comment->comment_status = $data['comment_status'];
        $comment->save();
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Comment::find($id)->delete();
        Toastr::success('Xoá sản phẩm thành công','Thành công');
        return redirect()->route('backend.comments.index');
    }
}
