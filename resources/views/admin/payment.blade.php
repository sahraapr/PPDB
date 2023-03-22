@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pembayaran</h1>
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
            <h3 class="section-title">Pembayaran</h3>
            <form method="POST" action="{{ route('paymentStore') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Pembayaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label>Nama Rekening Bank</label>
                                        <select class="form-control" name="bank_name" id="nama_bank" onchange="show()">
                                            <option></option>
                                            <option>PT BANK RAKYAT INDONESIA</option>
                                            <option>PT BANK MANDIRI</option>
                                            <option>PT BANK NEGARA INDONESIA</option>
                                            <option>PT BANK TABUNGAN NEGARA</option>
                                            <option>PT BANK DANAMON INDONESIA</option>
                                            <option>PT BANK PERMATA</option>
                                            <option>PT BANK CENTRAL ASIA</option>
                                            <option>PT BANK MAYBANK  INDONESIA</option>
                                            <option>PT PAN INDONESIA BANK</option>
                                            <option>PT BANK CIMB NIAGA</option>
                                            <option>PT BANK UOB INDONESIA</option>
                                            <option>PT BANK OCBC NISP</option>
                                            <option>PT BANK ARTHA GRAHA INTERNASIONAL</option>
                                            <option>PT BANK BUMI ARTA</option>
                                            <option>PT BANK HSBC INDONESIA</option>
                                            <option>PT BANK JTRUST INDONESIA</option>
                                            <option>PT BANK MAYAPADA INTERNATIONAL</option>
                                            <option>PT BANK OF INDIA INDONESIA</option>
                                            <option>PT BANK MUAMALAT INDONESIA</option>
                                            <option>PT BANK MESTIKA DHARMA</option>
                                            <option>PT BANK SHINHAN INDONESIA</option>
                                            <option>PT BANK SINARMAS</option>
                                            <option>PT BANK MASPION INDONESIA</option>
                                            <option>PT BANK GANESHA</option>
                                            <option>PT BANK ICBC INDONESIA</option>
                                            <option>PT BANK QNB INDONESIA</option>
                                            <option>PT BANK WOORI SAUDARA INDONESIA 1906</option>
                                            <option>PT BANK MEGA</option>
                                            <option>PT BANK KB BUKOPIN</option>
                                            <option>PT BANK SYARIAH INDONESIA</option>
                                            <option>PT BANK KEB HANA INDONESIA</option>
                                            <option>PT BANK MNC INTERNASIONAL</option>
                                            <option>PT BANK RAYA INDONESIA</option>
                                            <option>PT BANK SBI INDONESIA</option>
                                            <option>PT BANK MEGA SYARIAH</option>
                                            <option>PT BANK INDEX SELINDO</option>
                                            <option>PT BANK MAYORA</option>
                                            <option>PT BANK CHINA CONSTRUCTION BANK INDONESIA</option>
                                            <option>PT BANK DBS INDONESIA</option>
                                            <option>PT BANK RESONA PERDANIA</option>
                                            <option>PT BANK MIZUHO INDONESIA</option>
                                            <option>PT BANK CAPITAL INDONESIA</option>
                                            <option>PT BANK BNP PARIBAS INDONESIA</option>
                                            <option>PT BANK ANZ INDONESIA</option>
                                            <option>PT BANK IBK INDONESIA</option>
                                            <option>PT BANK ALADIN SYARIAH</option>
                                            <option>PT BANK CTBC INDONESIA</option>
                                            <option>PT BANK COMMONWEALTH</option>
                                            <option>PT BANK BTPN</option>
                                            <option>PT BANK VICTORIA SYARIAH</option>
                                            <option>PT BANK JABAR BANTEN SYARIAH</option>
                                            <option>PT KROM BANK INDONESIA</option>
                                            <option>PT BANK JASA JAKARTA</option>
                                            <option>PT BANK NEO COMMERCE</option>
                                            <option>PT BANK DIGITAL BCA</option>
                                            <option>PT BANK NATIONALNOBU</option>
                                            <option>PT BANK INA PERDANA</option>
                                            <option>PT BANK PANIN DUBAI SYARIAH</option>
                                            <option>PT PRIMA MASTER BANK</option>
                                            <option>PT BANK KB BUKOPIN SYARIAH</option>
                                            <option>PT BANK SAHABAT SAMPOERNA</option>
                                            <option>PT BANK OKE INDONESIA</option>
                                            <option>PT BANK AMAR INDONESIA</option>
                                            <option>PT BANK SEABANK INDONESIA</option>
                                            <option>PT BANK BCA SYARIAH</option>
                                            <option>PT BANK JAGO TBK</option>
                                            <option>PT BANK BTPN SYARIAH</option>
                                            <option>PT BANK MULTIARTA SENTOSA</option>
                                            <option>PT BANK FAMA INTERNASIONAL</option>
                                            <option>PT BANK MANDIRI TASPEN</option>
                                            <option>PT BANK VICTORIA INTERNATIONAL</option>
                                            <option>PT ALLO BANK INDONESIA</option>
                                            <option>PT BPD JAWA BARAT DAN BANTEN</option>
                                            <option>PT BPD DKI</option>
                                            <option>PT BPD DAERAH ISTIMEWA YOGYAKARTA</option>
                                            <option>PT BPD JAWA TENGAH</option>
                                            <option>PT BPD JAWA TIMUR</option>
                                            <option>PT BPD JAMBI</option>
                                            <option>PT BANK ACEH SYARIAH</option>
                                            <option>PT BPD SUMATERA UTARA</option>
                                            <option>PT BANK NAGARI</option>
                                            <option>PT BPD RIAU KEPRI SYARIAH</option>
                                            <option>PT BPD SUMATERA SELATAN DAN BANGKA BELITUNG</option>
                                            <option>PT BPD LAMPUNG</option>
                                            <option>PT BPD KALIMANTAN SELATAN</option>
                                            <option>PT BPD KALIMANTAN BARAT</option>
                                            <option>PT BPD KALIMANTAN TIMUR DAN KALIMANTAN UTARA</option>
                                            <option>PT BPD KALIMANTAN TIMUR DAN KALIMANTAN UTARA</option>
                                            <option>PT BPD SULAWESI SELATAN DAN SULAWESI BARAT</option>
                                            <option>PT BPD SULAWESI UTARA DAN  GORONTALO</option>
                                            <option>PT BANK NTB SYARIAH</option>
                                            <option>PT BPD BALI</option>
                                            <option>PT BPD NUSA TENGGARA TIMUR</option>
                                            <option>PT BPD MALUKU DAN MALUKU UTARA</option>
                                            <option>PT BPD PAPUA</option>
                                            <option>PT BPD BENGKULU</option>
                                            <option>PT BPD SULAWESI TENGAH</option>
                                            <option>PT BPD SULAWESI TENGGARA</option>
                                            <option>PT BPD BANTEN</option>
                                            <option>CITIBANK N.A.</option>
                                            <option>JP MORGAN CHASE BANK NA</option>
                                            <option>BANK OF AMERICA N.A</option>
                                            <option>BANGKOK BANK PCL</option>
                                            <option>MUFG BANK LTD</option>
                                            <option>STANDARD CHARTERED BANK</option>
                                            <option>DEUTSCHE BANK AG</option>
                                            <option>BANK OF CHINA (HONG KONG) LIMITED CABANG JAKARTA</option>
                                            <option value="lainnya">lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Nama Pemilik Rekening</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Masukan Nama Pemilik Rekening">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Nominal</label>
                                        <input type="text" class="form-control" name="nominal" id="dengan-rupiah"
                                            placeholder="Masukan Nominal Uang">
                                    </div>
                                    <div class="col-sm-4" style="display: none;" id="bank_lainnya">
                                        <label>Nama Rekening Bank</label>
                                        <input type="text" class="form-control" name="bank_lainnya"
                                            placeholder="Masukan Nama Rekening Bank">
                                    </div>
                                </div>
                                <br>
                                <div class="row align-items-start">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="image" name="image">
                                        <label class="input-group-text" for="image">Upload</label>
                                    </div>
                                </div>
                                <br>
                                <div class="row align-items-start">
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-4">
                                        <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </div>
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
