<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanCuti extends Model
{
    protected $fillable = ['id','nama_karyawan','divisi','jeniscuti','tanggalcuti','status'];

}
