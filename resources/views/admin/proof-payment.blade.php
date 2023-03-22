@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Verifikasi Pembayaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Bukti Pembayaran</div>
            </div>
        </div>
        <div class="section-body">
            <h3 class="section-title">Bukti Pembayaran Siswa</h3>
        </div>
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('uploads/'.$payment->image) }}" width="480px" height="480px" class="mb-5">
                            {{-- <img src="/storage/images/{{ $payment->image }}" width="480px" height="480px" class="mb-5"> --}}
                            <p class="card-text">Nama Bank: {{ $payment->bank_name }}</p>
                            <p class="card-text">Nama Pemilik Rekening: {{ $payment->name }}</p>
                            <p class="card-text">Nominal: {{ $payment->nominal }}</p>
                            <a href="/verification" class="btn btn-primary">back</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
@endsection
