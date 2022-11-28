<?php

namespace App\Http\Controllers;

class TestingController extends Controller
{
    function hii($nama) {
        echo view("hei")
        ->with("nama", $nama)
        ->with("mk", "web lanjut")
        ->with("waktu", date("H:m:s"));
    }
}

