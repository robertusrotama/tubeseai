<?php

namespace App\Models;

use App\Models\datapegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapelatihan extends Model
{
    protected $fillable = ['id','nama_pelatihan','tanggal_pelatihan','waktu_pelatihan','tempat_pelatihan','jumlah_pegawai','Marketing','HR','Finance','Operasional','penyelenggara_pelatihan','anggaran biaya','status'];


}

