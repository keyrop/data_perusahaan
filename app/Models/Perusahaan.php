<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perusahaan;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = "perusahaan";

    public function karyawan()
    {
        return $this->hasMany(karyawan::class,"perusahaan_id");
    }

    public function user()
    {
        return $this->hasOne(user::class,"perusahaan_id");
    }

}