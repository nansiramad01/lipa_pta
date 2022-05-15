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
        Schema::create('bulan_laporan', function (Blueprint $table) {
            $table->id();
            $table->string('bulan_angka');
            $table->string('nama_bulan');
            $table->string('tahun');
            $table->foreignId('id_satker')->constrained('satuankerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulan_laporan');
    }
};
