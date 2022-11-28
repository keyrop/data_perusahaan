<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Samarinda($name) {
        return view('KALTIM');
    }

    function Rumah($name) {
        return view('home');
    }

    function UMKALTIM($name) {
        return view('UMKT');
    }

    function Jadwal($name) {
        return view('MATAKULIAH');
    }

    function introduction($nama) {
        echo view("perkenalan")
        ->with("nama", $nama)
        ->with("selamat", "malam")
        ->with("apa", "kabar")
        ->with("asal", "dari mana")
        ->with("tanggal", date("l-y-m-d"))
        ->with("waktu", date("H:m:s"));
    }

    function keuangan($name) {
        return view('DATAKEUANGAN');
    }

}
