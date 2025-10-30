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
        //$pegawai = DB::table('pegawai')->get();
        $pegawai = DB::table('pegawai')->paginate(10);

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
    // select * from pegawai where id = $id
    {
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->first();
        //view --> form  
        return view('admin.pegawai.edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request, $id)
    {
        // Validasi sederhana
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
        ]);

        // Update data
        // sql: UPDATE pegawai SET pegawai_nama = 'nama', pegawai_jabatan = 'jabatan',
        DB::table('pegawai')->where('pegawai_id', $id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat,
        ]);

        return redirect('/pegawai')->with ('success', 'Data pegawai berhasil diperbarui.');
    }

    //delete
    public function hapus($id)
    {
        // Hapus data pegawai
        DB::table('pegawai')->where('pegawai_id', $id)->delete();
        return redirect('/pegawai')->with('success', 'Data pegawai berhasil dihapus.');
    }
}
