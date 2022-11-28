<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function buat()
    {
        return view("jabatan.form-input");
    }

    public function simpan(Request $request)
    {
        $jabatan = new Jabatan();
        $jabatan->nama = $request->get("nama");
        $jabatan->keterangan = $request->get("keterangan");
        $jabatan->save();

        return redirect(route("tampil_jabatan", ['id' => $jabatan->id]));
    }

    public function tampil($id)
    {
        $jabatan = Jabatan::find($id);

        return view("jabatan.tampil")->with("jabatan", $jabatan);
    }

    public function semua()
    {
        $data = Jabatan::all();
        return view("jabatan.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("jabatan.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->nama = $request->get("nama");
        $jabatan->keterangan = $request->get("keterangan");
        $jabatan->save();

        return redirect(route("tampil_jabatan", ['id' => $jabatan->id]));
    }

    public function hapus($id)
    {
        Jabatan::destroy($id);
        return redirect(route('semua_jabatan'));
    }
}