<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('idkaryawan');
            $table->string('nama_karyawan','150');
            $table->enum('divisi',['HR','Finnance','Marketing','Operasional']);
            $table->enum('pangkat',['Newbie','Junior','Senior']);
            $table->integer('jam_kerja');
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
        Schema::dropIfExists('salary');
    }
}
