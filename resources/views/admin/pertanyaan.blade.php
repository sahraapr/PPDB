@extends('layouts.main')
@section('content')
<?php 
    use App\Models\DetailUser;
?>
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

        <?php
            $id = Auth::user()->id;
            $history = DB::table('payments')->where('user_id', $id)->get();
        ?>



        <div class="section-body">
            <h3 class="section-title">Data Diri</h3>

            <form action="{{ route('jwbpertanyaan') }}" method="Post" enctype="multipart/form-data">
                @csrf

                @method('GET')

                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
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
                            <input type="text" name="jawaban1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ $detailwawancara2->pertanyaan }}</label>
                            <input type="text" name="jawaban2"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ $detailwawancara3->pertanyaan }}</label>
                            <input type="text" name="jawaban3" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ $detailwawancara4->pertanyaan }}</label>
                            <input type="text" name="jawaban4"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ $detailwawancara5->pertanyaan }}</label>
                            <input type="text" name="jawaban5"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ $detailwawancara6->pertanyaan }}</label>
                            <input type="text" name="jawaban6" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ $detailwawancara7->pertanyaan }}</label>
                            <input type="text" name="jawaban7" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ $detailwawancara8->pertanyaan }}</label>
                            <input type="text" name="jawaban8" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ $detailwawancara9->pertanyaan }}</label>
                            <input type="text" name="jawaban9" class="form-control">
                        </div>

                        </div>
                       
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


       
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
@endsection
