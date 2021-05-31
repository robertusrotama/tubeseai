<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = ['id','nama_karyawan','nik','jenis_kelamin','divisi','alamat','nomor_telp','status','tanggal_masuk'];
}
