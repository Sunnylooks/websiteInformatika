<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    //index view
    public function index()
    {
        //take db data pegawai
        //select * from pegawai
        $pegawai = DB::table('pegawai')->get();

        return view('admin.pegawai.pegawai',['pegawai' => $pegawai]);
    }
    //add
    public function tambah()
    {

        return view('admin.pegawai.tambah');
    }

    //simpan
    public function store(Request $request)
    {
        // Validasi dan simpan data pegawai
        //INSERT INTO pegawai (pegawai_nama, pegawai_jabatan, pegawai_umur, pegawai_alamat) 
        //VALUES ('nilai_nama', 'nilai_jabatan', 'nilai_umur', 'nilai_alamat');
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    //update
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('admin.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update data pegawai
    }

    //delete
    public function destroy($id)
    {
        // Hapus data pegawai
    }
}
