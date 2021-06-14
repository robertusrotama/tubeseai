<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table='salary';
    protected $fillable = ['id','nama_karyawan','divisi','pangkat','jam_kerja'];
}
