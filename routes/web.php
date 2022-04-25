<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\MenuController;

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
        'menus' => MenuController::class,
        'categories' => CategoryController::class,
        'products'=>ProductController::class,
        
    ]); 
});
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
