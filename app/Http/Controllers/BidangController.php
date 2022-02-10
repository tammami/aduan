<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BidangController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('sidebar', 'bidang');
        $bidang = DB::select("SELECT * FROM bidang");
        return view('pages.bidang.index',compact('bidang'));
    }
    
}
