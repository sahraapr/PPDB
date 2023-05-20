<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use App\Models\DetailUser;
use App\Models\Pertanyaan;
use App\Models\User;
use App\Models\Wawancara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wawancara   =  DB::table('wawancara')->get();
        return view('admin.pertanyaan.index', compact('wawancara'));
    }

    public function wawancarasiswa()
    {
        $penerimaan   =  DB::table('pertanyaan')->get();
        return view('admin.wawancarasiswa', compact('penerimaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function show(Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wawancara = Wawancara::find($id);

        return view('admin.pertanyaan.edit', compact('wawancara'));
    }

    public function detailwawancara($id, $id_user, $pertanyaan)
    {
        $detailwawancara = DetailUser::find($id);
        $detail_user = User::find($id_user);
        $pertanyaan = Pertanyaan::find($pertanyaan);

        return view('admin.detailwawancara', compact('detailwawancara','detail_user','pertanyaan'));
    }

    public function update(Request $request, $id)
    {
        $wawancara = Wawancara::find($id);
        $wawancara->pertanyaan = $request->input('pertanyaan');
        $wawancara->update();

        return redirect()->route('pertanyaan-wawancara.index')->with('pesan', 'Pertanyaan Berhasil Di Update');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function uploadberkas(Request $request, $id)
    {
        $upload                     = DetailUser::find($id);
        $upload->nisn               = $request->input('nisn');
        $upload->asal_sekolah       = $request->input('asal_sekolah');
        $upload->nohp               = $request->input('nohp');
        $upload->nohp_ayah          = $request->input('nohp_ayah');
        $upload->nohp_ibu           = $request->input('nohp_ibu');
        $upload->jk                 = $request->input('jk');
        $upload->tgl_lahir          = $request->input('tgl_lahir');
        $upload->tempat_lahir       = $request->input('tempat_lahir');
        $upload->agama              = $request->input('agama');
        $upload->alamat             = $request->input('alamat');
        $upload->jurusan            = $request->input('jurusan');
        $upload->nama_ayah          = $request->input('nama_ayah');
        $upload->pekerjaan_ayah     = $request->input('pekerjaan_ayah');
        $upload->penghasilan_ayah   = $request->input('penghasilan_ayah');
        $upload->penghasilan_ibu   = $request->input('penghasilan_ibu');
        $upload->nama_ibu           = $request->input('nama_ibu');
        $upload->pekerjaan_ibu      = $request->input('pekerjaan_ibu');
        $upload->nohp_ayah          = $request->input('nohp_ayah');
        $upload->nohp_ibu           = $request->input('nohp_ibu');

        if($request->hasfile('file'))
        {
            $file                   = $request->file('file');
            $extention              = $file->getClientOriginalExtension(); 
            $filename               = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $upload->file        = $filename;
        }

        $upload->data           = 'Tuntas';


        $upload->update();

        return redirect()->route('data-diri')->with('pesan', 'Data Berhasil Di Upload');
    }

    public function jawabanwawancara(Request $request)
    {
        $jwb                        = new Pertanyaan();
        $jwb->user_id               = Auth::user()->id;
        $jwb->jawaban1              = $request->input('jawaban1');
        $jwb->jawaban2              = $request->input('jawaban2');
        $jwb->jawaban3              = $request->input('jawaban3');
        $jwb->jawaban4              = $request->input('jawaban4');
        $jwb->jawaban5              = $request->input('jawaban5');
        $jwb->jawaban6              = $request->input('jawaban6');
        $jwb->jawaban7              = $request->input('jawaban7');
        $jwb->jawaban8              = $request->input('jawaban8');
        $jwb->jawaban9              = $request->input('jawaban9');
        $jwb->save();

        return redirect()->route('pertanyaan')->with('pesan', 'Jawaban berhasil di kirim');

    }


    public function approvesiswa(Request $request, $pertanyaan)
    {
        $dataapprove                        = Pertanyaan::find($pertanyaan);
        $dataapprove->status                = $request->input('status');
        $dataapprove->update();

        return redirect()->route('jawabansiswa')->with('pesan', 'Jawaban berhasil di kirim');

    }

    public function pertanyaan()
    {
        return view('admin.pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerimaan $penerimaan)
    {
        //
    }
}
