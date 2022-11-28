<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = "karyawan";

    public function jabatan()
    {
        return $this->hasOne(jabatan::class,"karyawan_id");
    }
}