<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswas;

class siswabaruController extends Controller
{
    public function siswa()
    {
        $siswa = siswas::all();
        return view('indexcalonsiswa', ['siswa'=>$siswa]);
    }
    public function destroy($id)
    {
        $siswa = siswas::destroy($id);
        return redirect(Route('siswa'))->with('pesand', "Berhasil mengurangi data");
    }
    public function go()
    {
        return view('create');
    }
    public function create(Request $req)
    {
        $siswa = new siswas;
        $siswa->nipd = $req->nipd;
        $siswa->nama_siswa = $req->nama_siswa;
        $siswa->tempat_lahir = $req->tempat_lahir;
        $siswa->tanggal_lahir = $req->tanggal_lahir;
        $siswa->kelas = $req->kelas;
        $siswa->jurusan = $req->jurusan;
        $siswa->save();
        return redirect(Route('siswa'))->with('pesan', "Berhasil menambah data baru");
    }
    public function edit($id)
    {
        $siswa = siswas::find($id);
        return view('update', ['siswa' => $siswa]);
    }
    public function update(Request $req, $id)
    {
        $siswa = siswas::find($id);
        $siswa->nipd = $req->nipd;
        $siswa->nama_siswa = $req->nama_siswa;
        $siswa->tempat_lahir = $req->tempat_lahir;
        $siswa->tanggal_lahir = $req->tanggal_lahir;
        $siswa->kelas = $req->kelas;
        $siswa->jurusan = $req->jurusan;
        $siswa->save();
        return redirect(Route('siswa'))->with('pesane', "Berhasil mengedit data");
    }
}
