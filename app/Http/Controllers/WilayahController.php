<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('sidebar', 'wilayah');
        $wilayah = DB::select("SELECT * FROM wilayah");
        return view('pages.wilayah.index',compact('wilayah'));
    }
}
