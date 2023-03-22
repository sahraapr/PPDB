<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function indexRegister()
    {
        return view('pages.register');
    }

    public function registerStore(Request $request, User $user)
    {
        $select = $request->asal_sekolah;

        if($select == "lainnya") {
            $sekolah = $request->sekolah_lainnya;
        }else {
            $sekolah = $request->asal_sekolah;
        }

        $request->validate([
            'nisn' => 'required',
            'jk' => 'required',
            'asal_sekolah' => 'required',
            'name' => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir' => 'required',
            'agama' => 'required',
            'nohp' => 'required',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'nohp_ayah' => 'required',
            'nohp_ibu' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
        ]);

        $trim_nama = str_replace(" ", "", $request->input('name'));
        $strtolower = strtolower($trim_nama);

        $data = User::create([
            'name' => $request->name,
            'nisn' => $request->nisn,
            'agama' => $request->agama,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'jk' => $request->jk,
            'asal_sekolah' => $sekolah,
            'jurusan' => $request->jurusan,
            'password' => Hash::make($request->nisn),
            'nohp' => $request->nohp,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'penghasilan_ayah' => $request->pekerjaan_ayah,
            'nohp_ayah' => $request->nohp_ayah,
            'nohp_ibu' => $request->nohp_ibu,
            'nama_ibu' => $request->nama_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'email' => $strtolower.'@gmail.com',
        ]);

        return view('print', compact('data'));
    }
}
