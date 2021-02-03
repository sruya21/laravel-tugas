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
        $this->validate($request,[
            'nama' => 'required|max:50',
            'telepon' => 'required|numeric',
            'alamat' => 'required|max:50',
        ], [
            'nama.required' => 'Nama tidak boleh kosong',
            'telepon.required' => 'Telepon tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
        ]);
        DB::table('siswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect('data')->with('sukses1', 'Sukses diperbarui');
    }

    public function edit($id)
    {
       $siswa = DB::table('siswa')->where('id',$id)->get();
       return view('etc.edit', ['siswa'=>$siswa]);
    }

    public function hapus($id)
    {
       $siswa = DB::table('siswa')->where('id',$id)->delete();
       return redirect()->back()->with('sukses', 'Data telah dihapus');
    }

}
