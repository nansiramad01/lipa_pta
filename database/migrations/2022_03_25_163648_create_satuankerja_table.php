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
        Schema::create('satuankerja', function (Blueprint $table) {
            // $table->id_satker();
            $table->id();
            // $table->increments('id_satker');
            $table->string('nama_satker');
            $table->string('alamat_satker');
            $table->string('telepon_satker');
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
        Schema::dropIfExists('satuankerja');
    }
};
