<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $fillable = ['id_karyawan','namakaryawan','jammasuk','jamkeluar'];
}
 