<?php

use App\Http\Controllers\auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\backend\StaffController;
use App\Http\Controllers\backend\SettingController;

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
//Admin Auth
Route::get('/admin/login', function () {
    return view('auth.login_admin');})->name('admin.login')->middleware('block.login.admin');
Route::get('/admin/verify', function () {
    return view('auth.forgot_admin');})->name('admin.forgotPass')->middleware('block.login.admin');
Route::post('/admin/verify', [ForgotPasswordController::class,'resetPasswordAdmin'])->name('admin.sendEmail');
Route::post('/admin/login/authenticate', [LoginController::class,'authenticateAdmin'])->name('admin.login.authenticate');
Route::post('/admin/logout', [LogoutController::class,'logoutAdmin'])->name('admin.logout');
//User Auth
Route::get('/login', function () {
    return view('auth.login');})->name('user.login')->middleware('block.login.user');
Route::get('/register', function () {
    return view('auth.register');})->name('user.register')->middleware('block.login.user');
Route::post('/register', [RegisterController::class,'registerUser'])->name('user.register.create');
Route::post('/register/confirmEmail', [RegisterController::class,'confirm'])->name('user.register.confirmEmail');
Route::post('/login/authenticate', [LoginController::class,'authenticateAdmin'])->name('user.login.authenticate');
Route::post('/logout', [LogoutController::class,'logoutAdmin'])->name('user.logout');
//Admin Page
Route::prefix('admin')
    ->name('backend.')
    ->middleware(['admin', 'preventBackHistory'])
    ->group(function () {
        Route::get('/', function () {
            return view('backend.dashboard');})->name('admin.dashboard');
        Route::get('/settings', function () {
            return view('backend.settings');})->name('admin.settings');
        Route::post('/settings/updateInfo', [SettingController::class, 'updateInfo'])->name('admin.updateInfo');
        Route::post('/settings/changePassword', [SettingController::class, 'changePassword'])->name('admin.changePassword');
        Route::post('/check_comment', [CommentController::class, 'check_comment']);
        Route::post('/reply_comment', [CommentController::class, 'reply_comment'])->name('reply');
        Route::get('/users/recycle', [UserController::class, 'index2'])->name('users.index2');
        Route::get('/users/recycle/{user}', [UserController::class, 'restore'])->name('users.restore');
        Route::get('/categories/recycle', [CategoryController::class, 'index2'])->name('categories.index2');
        Route::get('/categories/recycle/{user}', [CategoryController::class, 'restore'])->name('categories.restore');
        Route::resources([
            'roles' => RoleController::class,
            'users' => UserController::class,
            'categories' => CategoryController::class,
            'products' => ProductController::class,
            'brands' => BrandController::class,
            'images' => ImageController::class,
            'requirements' => RequirementController::class,
            'orders' => OrderController::class,
            'comments' => CommentController::class,
            'coupons' => CouponController::class,
        ]);
        Route::prefix('staffs')-> name('staffs.')
        ->middleware('permission:editor')->group(function(){
            Route::get('/', [StaffController::class,'index'])->name('index');
            Route::get('/reloadTable', [StaffController::class,'reloadTable'])->name('reloadTable');
            Route::get('/create', [StaffController::class,'create'])->name('create');
            Route::post('/', [StaffController::class,'store'])->name('store');
            Route::get('/{id}/edit', [StaffController::class,'edit'])->name('edit');
            Route::put('/{id}', [StaffController::class,'update'])->name('update');
            Route::delete('/{id}', [StaffController::class,'destroy'])->name('destroy');
            Route::post('/lock/{id}', [StaffController::class,'lock'])->name('lock');
            Route::post('/resetpassword/{id}',[StaffController::class,'resetPassword'])->name('reset');
        });
    });
Route::prefix('/')
    ->name('frontend.')
    ->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('main.index');
        Route::get('/shop', [MainController::class, 'shop'])->name('main.shop');
        Route::get('/info/{product}', [MainController::class, 'info'])->name('main.info');
        Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('carts.add');
        Route::post('/cart/addajax', [CartController::class, 'addajax'])->name('carts.addajax');
        Route::post('/cart/update/', [CartController::class, 'update'])->name('carts.update');
        Route::post('/cart/checkcp/', [CartController::class, 'checkcp'])->middleware('auth')->name('carts.checkcp');
        Route::post('/load_comment', [MainController::class, 'load_comment'])->name('info.loadcmt');
        Route::post('/insert_rating', [MainController::class, 'insert_rating'])->name('info.insertrate');
        Route::post('/send_comment', [MainController::class, 'send_comment'])->name('info.sendcmt');
        Route::get('/cart/list', [CartController::class, 'index'])->name('carts.index');
        Route::middleware('auth')->get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
        Route::middleware('auth')->post('/checkout/saveOrder', [CheckoutController::class, 'saveOrder'])->name('checkout.save');
        Route::middleware('auth')->post('/select', [CheckoutController::class, 'select'])->name('checkout.select');
        Route::get('/cart/my-cart', [CartController::class, 'indexajax'])->name('carts.indexajax');
        Route::get('/cart/delete/{session_id}', [CartController::class, 'delete'])->name('carts.delete');
        Route::get('/cart/destroy/', [CartController::class, 'clearAll'])->name('carts.destroy');
    });
