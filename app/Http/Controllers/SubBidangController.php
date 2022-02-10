<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubBidangController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('sidebar', 'sub_bidang');
        $sub_bidang = DB::select("SELECT
                                    sub_bidang.id,
                                    sub_bidang.sub_bidang,
                                    bidang.bidang 
                                FROM
                                    sub_bidang
                                    INNER JOIN bidang ON sub_bidang.id_bidang = bidang.id");
        return view('pages.sub_bidang.index',compact('sub_bidang'));
    }
}
