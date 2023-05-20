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
                <tbody>
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
                    <?php $no=1; ?>
                    @foreach ($data as $item)
                        @if ($item['role'] == 'user')
                        <?php
                            $data_user = DB::table('detailuser')->where('id_user', $item->id)->get();
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->name }}</td>
                                
                                @foreach($data_user as $key)
                                    <td>{{ $key->asal_sekolah }}</td>
                                    <td>{{ $key->nisn }}</td>
                                    <td>{{ $key->nohp }}</td>
                                    <td>{{ $key->nohp_ayah }}</td>
                                    <td>{{ $key->nohp_ibu }}</td>
                                @endforeach
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
@endsection
