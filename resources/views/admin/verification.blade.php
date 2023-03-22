@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Verifikasi Pembayaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Verifikasi Pembayaran</div>
            </div>
        </div>
        <div class="section-body">
            <h3 class="section-title">Verifikasi Pembayaran</h3>
            <table id="data-admin" class="table table-striped table-bordered table-md"
                style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Nomer Registrasi</th>
                        <th>Nama</th>
                        <th>Bukti Pembayaran</th>
                        <th>Detail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <?php $i = 1; ?>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->user->id }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td><a href="/proof-payment/{{ $item->id }}">Lihat</a></td>
                            <td><a href="/detail/{{ $item->user_id }}">Detail</a></td>
                            <td>
                                @if ($item->status == 1)
                                    <b>Diterima</b>
                                @elseif($item->status == 2)
                                    <b>Ditolak</b>
                                @else
                                    <form action="{{ route('validateStore', $item->user_id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary">Validasi</button>
                                    </form>
                                    <form action="{{ route('rejected', $item->user_id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger">Tolak</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
@endsection
