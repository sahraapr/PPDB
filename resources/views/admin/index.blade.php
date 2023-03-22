@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            @if (Auth::user()->role == 'admin')
                <h1>Dashboard Admin</h1>
            @elseif(Auth::user()->role == 'user')
                <h1>Dashboard Student</h1>
            @endif
            <div class="section-header-breadcrumb">
            </div>
        </div>
        <div class="section-body">
            <h3 class="section-title">Hi, {{ Auth::user()->name }}</h3>
        </div>

        @if (isset($item->status))
            @if ($item->status == 3)
                <div class="alert alert-warning">
                    Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya
                </div>
            @elseif($item->status == 1)
                <div class="alert alert-info">
                    Pembayaran sudah diverifikasi
                </div>
            @else($item->status == 2)
                <div class="alert alert-danger">
                    Pembayaran ditolak, Silahkan Melakukan Pembayaran Ulang
                </div>
            @endif
        @endif
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
@endsection
