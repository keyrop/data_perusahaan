<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    public function buat()
    {
        return view("perusahaan.form-input");
    }

    public function simpan(Request $request)
    {
        $perusahaan = new Perusahaan();
        $perusahaan->nama = $request->get("nama");
        $perusahaan->keterangan = $request->get("keterangan");
        $perusahaan->save();

        return redirect(route("tampil_perusahaan", ['id' => $perusahaan->id]));
    }

    public function tampil($id)
    {
        $perusahaan = perusahaan::find($id);

        return view("perusahaan.tampil")->with("perusahaan", $perusahaan);
    }

    public function semua()
    {
        $data = perusahaan::all();
        return view("perusahaan.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("perusahaan.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $perusahaan = perusahaan::find($id);
        $perusahaan->nama = $request->get("nama");
        $perusahaan->keterangan = $request->get("keterangan");
        $perusahaan->user_id = auth()->user(user_id);
        $perusahaan->save();

        return redirect(route("tampil_perusahaan", ['id' => $perusahaan->id]));
    }

    public function hapus($id)
    {
        Perusahaan::destroy($id);
        return redirect(route('semua_perusahaan'));
    }
}