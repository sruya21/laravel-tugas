<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\form;

class DataController extends Controller
{
    public function index()
    {
    	$siswa = DB::table('siswa')->get();
        return view('etc.data',['siswa' => $siswa]);
    }

    public function update(Request $request)
    {
        DB::table('siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);
        return redirect('data');
    }

    public function edit($id)
    {
       $siswa = DB::table('siswa')->where('id',$id)->get();
       return view('etc.edit', ['siswa'=>$siswa]);
    }

    public function hapus($id)
    {
       $siswa = DB::table('siswa')->where('id',$id)->delete();
       return redirect('data');
    }

}
