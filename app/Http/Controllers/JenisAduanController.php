<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class JenisAduanController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('sidebar', 'jenis_aduan');
        $jenis_aduan = DB::select("SELECT jenis_aduan.id, 
                                        jenis_aduan.jenis_aduan, 
                                        bidang.bidang 
                                    FROM jenis_aduan 
                                    INNER JOIN bidang ON jenis_aduan.id_bidang = bidang.id");
        return view('pages.jenis_aduan.index',compact('jenis_aduan'));
    }
    
}
