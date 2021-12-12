<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perusahaan;
use App\karyawan;

class perusahaancontroller extends Controller
{
public function login()
{
    
}

    public function index()
    {
        $data = perusahaan::all();
        
        return view('welcome', compact('data'));
    }

    public function addview()
    {
        return view('addperusahaan');
    }

    public function store(Request $request)
    {
        perusahaan::create([
            'perusahaan' =>$request -> name    
        ]);
        return back();
    }

    public function delete($id)
    {
        perusahaan::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $data = perusahaan::findorfail($id);
        return view('editperusahaan', compact('data'));

    }

    public function update(Request $request, $id)
    {
        perusahaan::findorfail($id)->update([
            'perusahaan' => $request ->updated
        ]);
        return back();
    }
}
