<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapelatihans', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('idpelatihan');
            $table->string('nama_pelatihan');
            $table->date('tanggal_pelatihan');
            $table->time('waktu_pelatihan');
            $table->string('tempat_pelatihan');
            $table->string('jumlah_pegawai');
            $table->string('Marketing');
            $table->string('HR');
            $table->string('Finance');
            $table->string('Operasional');
            $table->string('penyelenggara_pelatihan');
            $table->float('anggaran_biaya');
            $table->enum('status',['Disetujui','Ditolak']);
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
        Schema::dropIfExists('datapelatihans');
    }
}
