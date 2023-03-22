@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Verifikasi Pembayaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>
        <div class="section-body">
            <h3 class="section-title">Detail Siswa</h3>
            <table id="data-admin" class="table table-striped table-bordered table-md"
                style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Reg</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Asal Sekolah</th>
                        <th>NISN</th>
                        <th>No Hp</th>
                        <th>No Hp Ayah</th>
                        <th>No Hp Ibu</th>
                    </tr>
                </thead>
                <tbody>
                        <?php $no=1; ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>{{ $detailUser->id }}</td>
                            <td>{{ $detailUser->email }}</td>
                            <td>{{ $detailUser->name }}</td>

                            <?php
                                $data_user = DB::table('detailuser')->where('id_user', $detailUser->id)->get();
                            ?>
                             @foreach($data_user as $key)
                                <td>{{ $key->asal_sekolah }}</td>
                                <td>{{ $key->nohp }}</td>
                                <td>{{ $key->nisn }}</td>
                                <td>{{ $key->nohp_ayah }}</td>
                                <td>{{ $key->nohp_ibu }}</td>
                            @endforeach
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
@endsection
