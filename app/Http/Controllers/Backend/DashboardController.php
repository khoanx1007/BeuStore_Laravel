<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        
        // $cache = Cache::put('test',10,10);
        // $save = $request->session()->put('name','Khoa');
        return view('backend.dashboard');
    
    }
}
