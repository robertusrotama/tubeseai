<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('pengajuan_cutis', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('idkaryawan');
            $table->string('nama_karyawan','150');
            $table->enum('divisi',['HR','Finnance','Marketing','Operasional']);
            $table->enum('jeniscuti',['Tahunan','Hamil','Haid','Sakit','Penting'])->default('Tahunan');
            $table->enum('status',['Setuju','Ditolak']);
            $table->date('tanggalcuti');
            $table->timestamps();

            // $table->foreign('idkaryawan')->references('id')->on('karyawans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_cutis');
    }
}
