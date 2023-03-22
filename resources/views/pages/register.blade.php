<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>PPDB</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<link href="{{asset('assets/vendor2/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor2/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor2/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor2/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor2/venobox/venobox.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor2/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor2/aos/aos.css')}}" rel="stylesheet">

<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script type="text/javascript" src="jquery-1.7.min.js"></script>
<script>
    function show() {
        var asal_sekolah = document.getElementById("asal_sekolah").value;
        var lainnya = document.getElementById("sekolah_lainnya");
        if (asal_sekolah == "lainnya") {
            lainnya.style.display = "";
        } else {
            lainnya.style.display = "none";
        }
    }
</script>
</head>

<body>

    <main id="main">    
        <div class="container" style="margin-top: 50px; margin-bottom:100px">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
    
            <h2 class="text-center mt-5 mb-3">Tata Cara PPDB Online</h2>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card h-100 d-flex">
                        <div class="card-body text-center">
                            <h4>Daftar</h4>
                            <p>Calon peserta didik baru akses laman situs PPDB online</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card h-100 d-flex">
                        <div class="card-body text-center">
                            <h4>Memberikan Bukti Berkas</h4>
                            <p>Calon peserta didik mempersiapkan beberapa dokumen penting yang dibutuhkan untuk memverifikasi data</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card h-100 d-flex">
                        <div class="card-body text-center">
                            <h4>Verifikasi Data</h4>
                            <p>Operator akan melakukan verifikasi pengajuan akun dan berkas secara online</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card h-100 d-flex">
                        <div class="card-body text-center">
                            <h4>Hasil</h4>
                            <p>Calon peserta didik baru akan mengecek apakah mereka telah lulus atau tidak di halaman <strong>"Hasil Pendaftaran"</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mt-3">
                <div class="card-body">
                    <h3 class="text-center">Biodata Calon Siswa</h3>
                    <hr>
                    <form action="{{ route('registerStore') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" class="form-control" autocomplete="off" autofocus>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="number" name="nisn" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="number" name="nohp" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="agama" class="form-control">
                                        <option>Jenis Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghuchu">Khonghuchu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Asal Sekolah</label>
                                    {{-- <input type="text" name="asal_sekolah" class="form-control" autocomplete="off"> --}}
                                    <select name="asal_sekolah" class="form-control">
                                        {{-- @forelse ($sekolah as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>                                        
                                        @empty
                                            <option value="">NO Data</option>
                                        @endforelse --}}
                                        <option>Pilih Jurusan</option>
                                        <option value="SMP Hindia Belanda">SMP Hindia Belanda</option>
                                        <option value="lainnya">lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12" id="sekolah_lainnya" style="display: none;">
                                <div class="form-group">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                    <input type="text" name="sekolah_lainnya" class="form-control" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Minat Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                        {{-- @forelse ($jurusan as $item)
                                            <option value="{{ $item->id }}">{{ $item->jurusan }}</option>                                        
                                        @empty
                                            <option value="">NO Data</option>
                                        @endforelse --}}
                                        <option value="RPL">RPL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jk" class="form-control">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option value="Laki_Laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

<script src="{{asset('assets/vendor2/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor2/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor2/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor2/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor2/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor2/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/vendor2/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor2/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/vendor2/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor2/aos/aos.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>