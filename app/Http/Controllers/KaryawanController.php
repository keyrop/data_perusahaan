<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function buat()
    {
        return view("karyawan.form-input");
    }

    public function simpan(Request $request)
    {
        $karyawan = new Karyawan();
        $karyawan->nama = $request->get("nama");
        $karyawan->keterangan = $request->get("keterangan");
        $karyawan->save();

        return redirect(route("tampil_karyawan", ['id' => $karyawan->id]));
    }

    public function tampil($id)
    {
        $karyawan = karyawan::find($id);

        return view("karyawan.tampil")->with("karyawan", $karyawan);
    }

    public function semua()
    {
        $data = karyawan::all();
        return view("karyawan.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("karyawan.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $karyawan = karyawan::find($id);
        $karyawan->nama = $request->get("nama");
        $karyawan->keterangan = $request->get("keterangan");
        $karyawan->save();

        return redirect(route("tampil_karyawan", ['id' => $karyawan->id]));
    }

    public function hapus($id)
    {
        Karyawan::destroy($id);
        return redirect(route('semua_karyawan'));
    }
}