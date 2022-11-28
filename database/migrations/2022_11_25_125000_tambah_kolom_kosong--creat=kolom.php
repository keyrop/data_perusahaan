<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('karyawan',function($table){
            $table->integer("perusahaan_id")->nullable();
            $table->integer("jabatan_id")->nullable();
            $table->integer("gaji_id")->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('karyawan',function($table){
            $table->dropColumn("perusahaan_id");
            $table->dropColumn("karyawan_id");
            $table->dropColumn("jabatan_id");
            $table->dropColumn("gaji_id");
        });
    }

};
