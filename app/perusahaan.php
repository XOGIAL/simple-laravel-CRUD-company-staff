<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    protected $fillable= ['perusahaan'];

    public function karyawans()
    {
      return $this->hasmany('App\karyawan','perusahaanid','id');
    }
}

