@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pertanyaan wawancara</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        <div class="section-body">
            <a href="{{ route('pertanyaan-wawancara.create') }}" class="btn btn-success">Create</a>
            <table id="data-admin" class="table table-striped table-bordered table-md"
                style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
                <thead>
                    <tr>

                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                    ?>
                    @foreach ($wawancara as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->pertanyaan }}</td>
                            <td>
                                <div class="d-flex">
                                    <form action="{{ route('pertanyaan-wawancara.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('pertanyaan-wawancara.edit',$item->id) }}">Edit</a>
                                        @csrf
                                    </form>
                                </div>	
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
