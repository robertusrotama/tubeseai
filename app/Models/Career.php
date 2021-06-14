<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table='careers';
    protected $fillable = ['id','nama_karyawan','divisi','pangkat','berkas','pelatihan'];
}
