<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DetailUser;
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
            'name' => 'required',
            'jk' => 'required',
            'asal_sekolah' => 'required',
            'name' => 'required',
            'tgl_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'nohp' => 'required',
        ]);

        $trim_nama = str_replace(" ", "", $request->input('name'));
        $strtolower = strtolower($trim_nama);

        $data1 = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->nisn),
            'email' => $strtolower.'@gmail.com',
        ]);

        $data = DetailUser::create([
            'nisn' => $request->nisn,
            'jk' => $request->jk,
            'asal_sekolah' => $sekolah,
            'nohp' => $request->nohp,
            'nohp_ayah' => $request->nohp_ayah,
            'nohp_ibu' => $request->nohp_ibu,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'penghasilan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'id_user' => $data1->id,
        ]);

        return view('print', compact('data', 'data1'));
    }
}
