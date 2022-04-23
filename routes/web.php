<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;

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
Route::get('/',function(){ 
    return view('frontend.main.index');
    })->name('main.index');
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('backend')
    ->name('backend.')
    ->group(function(){
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::post('/storage/delete', 'StorageController@destroy')->name('storage.destroy');
    Route::get('/storage/download/{download}', 'StorageController@download')->name('storage.download');
    Route::get('/storage', 'StorageController@index')->name('storage');
    Route::get('/users/recycle', 'UserController@index2')->name('users.index2');  
    Route::get('/users/recycle/{user}','UserController@restore')->name('users.restore');
    Route::get('/categories/recycle', 'CategoryController@index2')->name('categories.index2');  
    Route::get('/categories/recycle/{user}','CategoryController@restore')->name('categories.restore');
    Route::resources([
        'roles' => RoleController::class,
        'users' => UserController::class,
        'menus' => MenuController::class,
        'product'=>ProductController::class,
        'categories' => CategoryController::class,
    ]); 
});
Route::prefix('/')
        ->namespace('Auth')
        ->name('auth.')->group(function(){
            Route::get('/register', 'RegisteredUserController@create')
            ->middleware('guest')
            ->name('register');
            Route::post('/register','RegisteredUserController@store')
            ->middleware('guest');
            Route::get('/login', [LoginController::class,'create'])
            ->middleware('guest')
            ->name('login');
            Route::post('/login', 'LoginController@authenticate')
            ->middleware('guest')
            ->name('login');
            Route::post('/logout', 'LoginController@logout')
            ->name('logout');
});
