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
            <h3 class="section-title">Data Diri</h3>
            <form action="" method="POST">
                @csrf


                <div class="card">
                    <div class="card-body">
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
                        <div class="col-12">
                            <h3 class="mt-5 text-center">Biodata Orang Tua</h3>
                            <hr>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Orang Tua (Ayah)</label>
                                <input type="text" name="nama_ayah" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pekerjaan Ayah</label>
                                <select name="pekerjaan_ayah" class="form-control">
                                    {{-- @forelse ($pekerjaan_ortu as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_pekerjaan }}</option>                                        
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse --}}
                                    <option>Pilih Jenis Pekerjaan Ayah</option>
                                    <option value="Karyawan">Karyawan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penghasilan Ayah</label>
                                <select name="penghasilan_ayah" class="form-control">
                                    {{-- @forelse ($hasil_ortu as $item)
                                        <option value="{{ $item->id }}">{{ "Rp " . number_format($item->penghasilan_ortu,0,',','.') }}</option>                                        
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse --}}
                                    <option>Pilih Jenis Pekerjaan Ayah</option>
                                    <option value="3000 >">3000 ></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Orang Tua (Ibu)</label>
                                <input type="text" name="nama_ibu" class="form-control" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pekerjaan Ibu</label>
                                <select name="pekerjaan_ibu" class="form-control">
                                    {{-- @forelse ($pekerjaan_ortu as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_pekerjaan }}</option>                                        
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse --}}
                                    <option>Pilih Jenis Pekerjaan Ibu</option>
                                    <option value="IRT">IRT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penghasilan Ibu</label>
                                <select name="penghasilan_ibu" class="form-control">
                                    {{-- @forelse ($hasil_ortu as $item)
                                        <option value="{{ $item->id }}">{{ "Rp " . number_format($item->penghasilan_ortu,0,',','.') }}</option>                                        
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse --}}
                                    <option>Pilih Jenis Pekerjaan Ibu</option>
                                    <option value="300 >">300 ></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>No Telepon Ayah</label>
                                <input type="number" name="nohp_ayah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>No Telepon Ibu</label>
                                <input type="number" name="nohp_ibu" class="form-control" autocomplete="off">
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
    <script>
        var dengan_rupiah = document.getElementById('dengan-rupiah');
        dengan_rupiah.addEventListener('keyup', function(e) {
            dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        function show() {
            const bank_name = document.getElementById("nama_bank").value;
            const bank_lainnya = document.getElementById("bank_lainnya");

            if (bank_name == "lainnya") {
                bank_lainnya.style.display = "";
            } else {
                bank_lainnya.style.display = "none";
            }
        }
    </script>
@endsection
