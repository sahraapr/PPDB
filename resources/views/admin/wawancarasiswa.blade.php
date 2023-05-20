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
                        <th>Nama Pendaftar</th>
                        <th>NIS</th>
                        <th>Asal Sekolah</th>
                        <th>Minat Jurusan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penerimaan as $item)
                        <?php
                            $user_id   =  DB::table('users')->where('id', $item->user_id)->get();
                        ?>
                        <tr>
                            <?php $i = 1; ?>
                            <td>{{ $i++ }}</td>
                            @foreach ($user_id as $row)
                                <?php
                                    $detaildata = DB::table('detailuser')->where('id_user', $row->id)->get();
                                ?>
                                <td>{{ $row->name }}</td>

                                @foreach ($detaildata as $value)
                                    <td>{{ $value->nisn }}</td>
                                    <td>{{ $value->asal_sekolah }}</td>
                                    <td>{{ $value->jurusan }}</td>
                                @endforeach
                            @endforeach
                            <td>{{ $item->status }}</td>

                            <?php
                                $id_user = $row->id;
                                $pertanyaan = $item->id;
                            ?>
                            <td>
                                <a href="{{ route('detailwawancara', [$value->id, $id_user,$pertanyaan] ) }}" class="btn btn-success">Detail</a>
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
