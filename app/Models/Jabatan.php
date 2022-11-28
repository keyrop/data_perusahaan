<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jabatan;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = "jabatan";

    public function user()
    {
        return $this->hasMany(karyawan::class,"perusahaan_id");
    }
}