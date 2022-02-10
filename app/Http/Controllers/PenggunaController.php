<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('sidebar', 'pengguna');
        $pengguna = DB::select("SELECT
                                    users.id, 
                                    users.user, 
                                    users.nama, 
                                    users.nomor_hp, 
                                    users.foto, 
                                    users.id_sub_bidang, 
                                    sub_bidang.sub_bidang, 
                                    sub_bidang.id_bidang, 
                                    bidang.bidang, 
                                    users.level, 
                                    users.status
                                FROM
                                    users
                                    INNER JOIN
                                    sub_bidang
                                    ON 
                                        users.id_sub_bidang = sub_bidang.id
                                    INNER JOIN
                                    bidang
                                    ON 
                                        sub_bidang.id_bidang = bidang.id");
        return view('pages.pengguna.index', compact('pengguna'));
    }

    public function create()
    {
        $pegawai = DB::table("vw_pegawai")->orderBy('pegawai')->get();
        $sub_bidang = DB::table("sub_bidang")->get();
        $wilayah = DB::table("wilayah")->get();
        return view('pages.pengguna.create', compact('pegawai','sub_bidang','wilayah'));
    }

    public function store(Request $request)
    {
        // return $request;
        $pegawai = DB::select("SELECT * FROM vw_pegawai WHERE nip = '$request->nip'");
        // return $pegawai;
        Pengguna::create([
            "user" => $request->nip,
            "password" => bcrypt($request->password),
            "nama" => $pegawai[0]->pegawai,
            "nomor_hp" => $request->telp,
            "foto" => $pegawai[0]->foto,
            "id_sub_bidang" => $request->id_sub_bidang,
            "id_wilayah" => $request->id_wilayah,
            "level" => $request->level,
            "status" => $request->status
        ]);
        return Redirect::to('/pengguna');
    }

    public function show(Pengguna $pengguna)
    {
        // 
    }

    public function edit(Pengguna $pengguna)
    {
        $sub_bidang = DB::table("sub_bidang")->get();
        $wilayah = DB::table("wilayah")->get();
        return view('pages.pengguna.edit', compact('pengguna','sub_bidang','wilayah'));
    }

    public function update(Request $request, Pengguna $pengguna)
    {
        $pengguna->nomor_hp = $request->telp;
        $pengguna->id_sub_bidang = $request->id_sub_bidang;
        $pengguna->id_wilayah = $request->id_wilayah;
        $pengguna->level = $request->level;
        $pengguna->status = $request->status;

        $pengguna->save();

        return Redirect::to('/pengguna');
    }

    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
