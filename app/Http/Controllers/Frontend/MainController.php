<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Coupon;
use App\Models\Rating;
use App\Models\ProductRating;
use App\Models\Comment;
use App\Models\Requirement;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Toastr;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories_pc = Category::where('name','PC')->paginate(8);
        $categories_console= Category::where('name','Console')->paginate(8);
        $categories_switch = Category::where('name','Switch')->paginate(8);
        $brands = Brand::get();
        $comments = Comment::where('comment_status','1')->limit(3)->get();
        $tags= Tag::get();
        $tags_new= Tag::where('name','Mới')->get();
        $products = Product::get();
        return view('frontend.main.index')->with([
            'products'=>$products,
            'categories_switch'=>$categories_switch,
            'categories_pc'=>$categories_pc,
            'categories_console'=>$categories_console,
            'comments' => $comments,
            'tags' => $tags,
            'brands'=>$brands,
            'tags_new' => $tags_new,
        ]);
    }
    public function info(Product $product)
    {
        $images=Image::get();
        $brands=Brand::get();
        $ratinga = Rating::where('product_id',$product->id)->avg('rating');
        $ratinga=round($ratinga,2);
        $ratingc = Rating::where('product_id',$product->id)->count();
        $rating=round($ratinga);
        $requirement=Requirement::where('product_id',$product->id)->get();
        $products=Product::limit(8)->get();
        return view('frontend.main.article')->with([
            'product'=>$product,
            'images' =>$images,
            'brands' =>$brands,
            'products' =>$products,
            'requirement' =>$requirement,
            'rating' =>$rating,
            'ratingc' =>$ratingc,
            'ratinga' =>$ratinga,
        ]);
    }
    public function insert_rating(Request $request)
    {
        $data=$request->all();
        $rating= new Rating();
        $rating->product_id = $data['product_id'];
        $rating->rating = $data['index'];
        $rating->save();
        echo 'done';
    }
    public function send_comment(Request $request)
    {
        $product_id = $request->product_id;
        $comment_name = $request->comment_name;
        $comment_email = $request->comment_email;
        $comment = $request->comment;
        $cmt= new Comment();
        $cmt->comment_product_id=$product_id;
        $cmt->comment_name=$comment_name;
        $cmt->comment_email=$comment_email;
        $cmt->comment_status=0;
        $cmt->comment_reply=0;
        $cmt->comment=$comment;
        $cmt->save();
    }
    public function load_comment(Request $request)
    {
        $product_id = $request->product_id;
        $comments = Comment::where('comment_product_id',$product_id)->where('comment_status','1')->get();
        $comreps = Comment::where('comment_product_id',$product_id)->get();
        $output = '';
        foreach($comments as $key => $cmt){
            $output.='
            <div class="row cmt pt-2 mb-1" style="background-color:whitesmoke;">
                <div class="col-1">
                    <div class="cmt-img">
                        <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" class="w-100">
                    </div>
                </div>
                <div class="col-11">
                    <div class="cmt-in">
                        <div class="cmt-tit d-flex justify-content-between align-items-center">
                            <div class="textcmt">
                                <h6 class="font-weight-bold"><i class="fas fa-user-alt"></i> '. $cmt->comment_name .' | <span class="font-italic text-info">'.$cmt->comment_email.'</span></h6>
                                <span><i class="fas fa-calendar-alt"></i> '.$cmt->created_at.'</span>
                            </div>
                        </div>
                        <p>
                        '.$cmt->comment.'
                        </p>
                    </div>
                </div>
            </div>';
            foreach($comreps as $key => $repcmt){
                if($repcmt->comment_reply == $cmt->id){
                    $output.='
                    <div class="row cmt pt-2 ml-4 mb-1" style="background-color:#51c4ff;">
                        <div class="col-1">
                            <div class="cmt-img">
                                <img src="https://scr.vn/wp-content/uploads/2020/07/Avatar-Facebook-tr%E1%BA%AFng.jpg" class="w-100">
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="cmt-in">
                                <div class="cmt-tit d-flex justify-content-between align-items-center">
                                    <div class="textcmt">
                                        <h6 class="font-weight-bold"><i class="fas fa-user-shield"></i> '. $repcmt->comment_name .' | <span class="font-italic text-info">'.$cmt->comment_email.'</span></h6>
                                        <span><i class="fas fa-calendar-alt"></i> '.$repcmt->created_at.'</span>
                                    </div>
                                </div>
                                <p>
                                '.$repcmt->comment.'
                                </p>
                            </div>
                        </div>
                    </div>';
                }
            }
            
        }
        echo $output;
    }
    public function shop()
    {
        $my_products=Product::paginate(8);
        $images=Image::get();
        $brands=Brand::get();
        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by == 'giam_dan'){
                $my_products = Product::orderBy('price_origin','DESC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'tang_dan'){
                $my_products = Product::orderBy('price_origin','ASC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'new'){
                $my_products = Product::orderBy('created_at','DESC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'old'){
                $my_products = Product::orderBy('created_at','ASC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'az'){
                $my_products = Product::orderBy('name','ASC')->paginate(8)->appends(request()->query());
            }
            elseif($sort_by == 'za'){
                $my_products = Product::orderBy('name','DESC')->paginate(8)->appends(request()->query());
            }
            else{
                $my_products = Product::orderBy('id','DESC')->paginate(8)->appends(request()->query());
            }
        }
        return view('frontend.main.shop')->with([
            'my_products'=>$my_products,
            'images' =>$images,
            'brands' =>$brands,
        ]);
    }
    public function add(Product $product)
    {
        return view('frontend.carts.cart')->with([
            'product'=>$product,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
