<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;


class GajiController extends Controller
{
    public function buat()
    {
        return view("gaji.form-input");
    }

    public function simpan(Request $request)
    {
        $gaji = new Gaji();
        $gaji->gaji = $request->get("gaji");
        $gaji->tunjangan = $request->get("tunjangan");
        $gaji->upah = $request->get("upah");
        $gaji->save();

        return redirect(route("tampil_gaji", ['id' => $gaji->id]));
    }

    public function tampil($id)
    {
        $gaji = gaji::find($id);

        return view("gaji.tampil")->with("gaji", $gaji);
    }

    public function semua()
    {
        $data = gaji::all();
        return view("gaji.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("gaji.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $gaji = gaji::find($id);
        $gaji->nama = $request->get("nama");
        $gaji->keterangan = $request->get("keterangan");
        $gaji->save();

        return redirect(route("tampil_gaji", ['id' => $gaji->id]));
    }

    public function hapus($id)
    {
        Gaji::destroy($id);
        return redirect(route('semua_gaji'));
    }
}