@extends('layouts.main')
@section('content')
<?php 
    use App\Models\DetailUser;
?>
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

        <?php
            $id = Auth::user()->id;
            $history = DB::table('payments')->where('user_id', $id)->get();
        ?>


    @foreach ($history as $item)
        <?php 

            // $data_siswa = DetailUser::find($id);
            $data_siswa = DB::table('detailuser')->where('id_user', $id)->get();
            if($item->status == 'Nonaktif'){
        ?>

        <div class="section-body">
            <h3 class="section-title">Data Diri</h3>
            @foreach($data_siswa as $value)

            <form action="{{ route ('uploadberkas',$value->id) }}" method="Post" enctype="multipart/form-data">
                @csrf

                @method('GET')

                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" autocomplete="off" autofocus>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="number" name="nisn" class="form-control" value="{{ $value->nisn }}" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="number" name="nohp" value="{{ $value->nohp }}" class="form-control" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama" class="form-control">
                                    <option>Jenis Agama</option>
                                    <option value="Islam" @if ($value->agama == 'Islam')selected @endif>Islam</option>
                                    <option value="Kristen" @if ($value->agama == 'Kristen')selected @endif>Kristen</option>
                                    <option value="Hindu" @if ($value->agama == 'Hindu')selected @endif>Hindu</option>
                                    <option value="Budha" @if ($value->agama == 'Budha')selected @endif>Budha</option>
                                    <option value="Khonghuchu" @if ($value->agama == 'Khonghuchu')selected @endif>Khonghuchu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ $value->tgl_lahir }}" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="{{ $value->tempat_lahir }}" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Asal Sekolah</label>
                                <select name="asal_sekolah" class="form-control">
                                    {{-- @forelse ($sekolah as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_sekolah }}</option>                                        
                                    @empty
                                        <option value="">NO Data</option>
                                    @endforelse --}}
                                    <option>Asal Sekolah</option>
                                    <option value="SMP Hindia Belanda" @if ($value->asal_sekolah == 'SMP Hindia Belanda')selected @endif>SMP Hindia Belanda</option>
                                    <option value="lainnya">lainnya</option>
                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-md-12" id="sekolah_lainnya" style="display: none;">
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" name="sekolah_lainnya" class="form-control" autocomplete="off">
                            </div>
                        </div> --}}

                        <div class="col-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" cols="30" rows="10" class="form-control">{{ $value->alamat   }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Minat Jurusan</label>
                                <select name="jurusan" class="form-control">
                                    <option>Pilih Jurusan</option>
                                    <option value="RPL"  @if ($value->jurusan == 'RPL')selected @endif>RPL</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Laki_Laki" @if ($value->jk == 'laki_laki')selected @endif>Laki Laki</option>
                                    <option value="perempuan"  @if ($value->jk == 'perempuan')selected @endif>Perempuan</option>
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
                                <input type="text" name="nama_ayah" class="form-control" value="{{ $value->nama_ayah }}" autocomplete="off" autofocus>
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
                                    <option value="Dokter">Dokter</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Serabutan">Serabutan</option>
                                    <option value="Pengusaha">Pengusaha</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penghasilan Ayah</label>
                                <select name="penghasilan_ayah" class="form-control">
                                    <option>Pilih Penghasilan Ayah</option>
                                    <option value="300.000" @if ($value->penghasilan_ayah == '300.000')selected @endif>Rp. 300.000 </option>
                                    <option value="500.000 "  @if ($value->penghasilan_ayah == '500.000')selected @endif>Rp. 500.000 </option>
                                    <option value="1.000.000 "  @if ($value->penghasilan_ayah == '1.000.000')selected @endif>Rp. 1.000.000 </option>
                                    <option value="1.500.000 "  @if ($value->penghasilan_ayah == '1.500.000')selected @endif>Rp. 1.500.000 </option>
                                    <option value="2.000.000 >"  @if ($value->penghasilan_ayah == '2.000.000')selected @endif>Rp. 2.000.000 ></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama Orang Tua (Ibu)</label>
                                <input type="text" name="nama_ibu" class="form-control" value="{{ $value->nama_ibu }}" autocomplete="off" autofocus>
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
                                    <option>Pilih Pekerjaan Ibu</option>
                                    <option value="IRT" @if ($value->pekerjaan_ibu == 'IRT')selected @endif>IRT</option>
                                    <option value="Guru" @if ($value->pekerjaan_ibu == 'Guru')selected @endif>Guru</option>
                                    <option value="Dokter" @if ($value->pekerjaan_ibu == 'Dokter')selected @endif>Dokter</option>
                                    <option value="Karyawan" @if ($value->pekerjaan_ibu == 'Karyawan')selected @endif>Karyawan</option>
                                    <option value="Serabutan" @if ($value->pekerjaan_ibu == 'Serabutan')selected @endif>Serabutan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Penghasilan Ibu</label>
                                <select name="penghasilan_ibu" class="form-control">
                                    <option>Pilih Penghaslan Ibu</option>
                                    <option value="Tidak ada" @if ($value->penghasilan_ayah == 'Tidak ada')selected @endif>Tidak ada</option>
                                    <option value="300.000" @if ($value->penghasilan_ayah == '300.000')selected @endif>Rp. 300.000 </option>
                                    <option value="500.000 "  @if ($value->penghasilan_ayah == '500.000')selected @endif>Rp. 500.000 </option>
                                    <option value="1.000.000 "  @if ($value->penghasilan_ayah == '1.000.000')selected @endif>Rp. 1.000.000 </option>
                                    <option value="1.500.000 "  @if ($value->penghasilan_ayah == '1.500.000')selected @endif>Rp. 1.500.000 </option>
                                    <option value="2.000.000 >"  @if ($value->penghasilan_ayah == '2.000.000')selected @endif>Rp. 2.000.000 ></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>No Telepon Ayah</label>
                                <input type="number" name="nohp_ayah"  value="{{ $value->nohp_ayah }}" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>No Telepon Ibu</label>
                                <input type="number" name="nohp_ibu" value="{{ $value->nohp_ibu }}" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>File</label>
                                <input type="file" name="file" class="form-control" autocomplete="off"> 

                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Kirim</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </form>
        </div>

        <?php }else{?>
            <span>Tuntaskan Pembayaran</span>
        <?php }?>
    @endforeach

       
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
