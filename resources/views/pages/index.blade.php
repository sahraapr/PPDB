<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PPDB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>PPDB</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" class="nav-item nav-link active">Beranda</a>
            </div>
            <a href="/login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>


    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" style="height:85vh;">
                <img class="img-fluid" src="{{ asset('assets/img/hero-bg.jpg') }}" style="height:85vh; width:100%;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">PPDB</h5>
                                <h1 class="display-3 text-white animated slideInDown">PPDB TP 2023-2024</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Ayo! segera daftarkan dirimu dengan
                                    cara klik PENDAFTARAN PPDB dibawah ini!
                                    Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</p>
                                <a href="/register"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Pendaftaran
                                    PPDB</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
