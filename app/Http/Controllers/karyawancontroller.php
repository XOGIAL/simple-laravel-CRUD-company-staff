<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;
use App\perusahaan;

class karyawancontroller extends Controller
{

    public function viewadd($id)
    {
        $data = perusahaan::findorfail($id);
        return view('addkaryawan',compact('data'));
    }

    public function store(Request $request, $id)
    {
        karyawan::create([
            'perusahaanid'=>$request ->id,
            'namakaryawan'=>$request ->nama,
            'umur'=>$request ->umur,
            'gaji' =>$request ->gaji
        ]);
        return back();
    }

    public function list($id)
    {
        $data = perusahaan::find($id)->karyawans;
        return view('viewkaryawanlist',compact('data'));
    }

    public function delete($id)
    {
        karyawan::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $data = karyawan::findorfail($id);
        return view('karyawanedit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        karyawan::findorfail($id)->update([
            'namakaryawan'=>$request->nama,
            'umur'=>$request->umur,
            'gaji' => $request ->gaji
        ]);
        return back();
    }
}
