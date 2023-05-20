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

            <form action="{{ route ('pertanyaan-wawancara.update', $wawancara->id) }}" method="Post" enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Pertanyaan</label>
                                <textarea name="pertanyaan" id="" cols="30" rows="10">{{ $wawancara->pertanyaan }}</textarea>
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
