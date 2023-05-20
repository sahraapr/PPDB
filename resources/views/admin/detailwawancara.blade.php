@extends('layouts.main')
@section('content')

    <section class="section">
        <div class="section-header">
            <h1>Data Diri</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        @if (Auth::user()->role == 'user')
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
        @endif

        <div class="section-body">
            <h3 class="section-title">Edit Pertanyaan</h3>

            <form action="{{ route ('approvesiswa', $pertanyaan) }}" method="Post" enctype="multipart/form-data">
                @csrf

                @method('GET')

                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="" value="{{ $detailwawancara->nisn }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="" value="{{ $detail_user->name }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Asal Sekolah</label>
                                <input type="text" name="" value="{{ $detailwawancara->asal_sekolah }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>Minat Jurusan</label>
                                <input type="text" name="" value="{{ $detailwawancara->jurusan }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>agama</label>
                                <input type="text" name="" value="{{ $detailwawancara->agama }}" id="" class="form-control" readonly>
                            </div>
                        

                            <?php
                                use App\Models\Wawancara;

                                $detailwawancara1 = Wawancara::find('1');
                                $detailwawancara2 = Wawancara::find('2');
                                $detailwawancara3 = Wawancara::find('3');
                                $detailwawancara4 = Wawancara::find('4');
                                $detailwawancara5 = Wawancara::find('5');
                                $detailwawancara6 = Wawancara::find('6');
                                $detailwawancara7 = Wawancara::find('7');
                                $detailwawancara8 = Wawancara::find('8');
                                $detailwawancara9 = Wawancara::find('9');

                            ?>

                            <div class="form-group">
                                <label>{{ $detailwawancara1->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban1 }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>{{ $detailwawancara2->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban2 }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>{{ $detailwawancara3->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban3 }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>{{ $detailwawancara4->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban4 }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>{{ $detailwawancara5->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban5 }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>{{ $detailwawancara6->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban6 }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>{{ $detailwawancara7->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban7 }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>{{ $detailwawancara8->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban8 }}" id="" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label>{{ $detailwawancara9->pertanyaan }}</label>
                                <input type="text" name="" value="{{ $pertanyaan->jawaban9 }}" id="" class="form-control" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label>Tolak atau Terima</label>
                                <select name="status" class="form-control">
                                    <option>Approve</option>
                                    <option value="Ditolak">Tolak</option>
                                    <option value="Diterima">Terima</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


       
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
