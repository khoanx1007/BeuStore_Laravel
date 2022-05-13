<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Backend\ImageController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\RequirementController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('/')
    ->name('frontend.')
    ->group(function(){
    Route::get('/',[MainController::class,'index'])->name('main.index');
    Route::get('/shop',[MainController::class,'shop'])->name('main.shop');
    Route::get('/info/{product}',[MainController::class,'info'])->name('main.info');
    Route::post('/cart/add/{id}',[CartController::class,'add'])->name('carts.add');
    Route::post('/cart/addajax',[CartController::class,'addajax'])->name('carts.addajax');
    Route::post('/cart/update/',[CartController::class,'update'])->name('carts.update');
    Route::post('/cart/checkcp/',[CartController::class,'checkcp'])->middleware('auth')->name('carts.checkcp');
    // Route::post('/cart/checkout/',[CheckoutController::class,'checkout'])->middleware('auth')->name('carts.checkout');
    Route::get('/cart/list',[CartController::class,'index'])->name('carts.index');
    Route::middleware('auth')->get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');
    Route::middleware('auth')->get('/checkout/save',[CheckoutController::class,'saveorder'])->name('checkout.save');
    Route::middleware('auth')->post('/select',[CheckoutController::class,'select'])->name('checkout.select');
    Route::get('/cart/my-cart',[CartController::class,'indexajax'])->name('carts.indexajax');
    Route::get('/cart/delete/{session_id}',[CartController::class,'delete'])->name('carts.delete');
    Route::get('/cart/destroy/',[CartController::class,'clearAll'])->name('carts.destroy');
    });
Route::prefix('backend')
    ->name('backend.')
    ->middleware('auth')
    ->group(function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/users/recycle', [UserController::class,'index2'])->name('users.index2');  
    Route::get('/users/recycle/{user}',[UserController::class,'restore'])->name('users.restore');
    Route::get('/categories/recycle', [CategoryController::class,'index2'])->name('categories.index2');  
    Route::get('/categories/recycle/{user}',[CategoryController::class,'restore'])->name('categories.restore');
    Route::resources([
        'roles' => RoleController::class,
        'users' => UserController::class,
        'categories' => CategoryController::class,
        'products'=>ProductController::class,
        'brands'=>BrandController::class,
        'images'=>ImageController::class,
        'requirements'=>RequirementController::class,
        'orders'=>OrderController::class,
    ]); 
});
Route::resource('backend/coupons',CouponController::class);
Route::prefix('/')
        ->namespace('Auth')
        ->name('auth.')
        ->group(function(){
            Route::get('/register', [RegisteredUserController::class,'create'])
            ->middleware('guest')
            ->name('register');
            Route::post('/register',[RegisteredUserController::class,'store'])
            ->middleware('guest');
            Route::get('/login', [LoginController::class,'create'])
            ->middleware('guest')
            ->name('login');
            Route::post('/login', [LoginController::class,'authenticate'])
            ->middleware('guest')
            ->name('login');
            Route::post('/logout', [LoginController::class,'logout'])
            ->name('logout');
});
