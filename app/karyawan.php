<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $fillable = ['perusahaanid', 'namakaryawan','umur','gaji'];

    
}
