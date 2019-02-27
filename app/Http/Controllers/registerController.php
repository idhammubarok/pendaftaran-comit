<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\register;

class registerController extends Controller
{
    public function read()
    {
        return view('register');
    }
    public function insert(Request $request)
    {
        $data = new register;
        $data->nama = $request->get('nama_lengkap');
        $data->no_hp = $request->get('no_hp');
        $data->email = $request->get('email');
        $data->tgl_lahir = $request->get('tgl_lahir');
        $data->gender = $request->get('gender');
        $data->alamat = $request->get('alamat');
        $data->jurusan = $request->get('jurusan');
        $data->semester = $request->get('semester');
        $data->peminatan = $request->get('peminatan');
        $data->save();
        
        if ($data) {
            return redirect('/register')->with('alert','Register Succesfully ');
        }else{
            return redirect('/register')->with('alert2','Register failed, reload !!');
        }
    }
    public function view()
    {
        $data = register::all();
        return view('datatable',['view'=>$data]);
    }
    public function export()
    {
        $data = register::all();
        return view('export-data',['export'=>$data]);
    }
}   
