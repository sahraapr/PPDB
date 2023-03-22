<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login PPDB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">
</head>

<body>

    @if (Session::get('notAllowed'))
        <div class="alert alert-danger" role="alert">
            {{ session('notAllowed') }}
        </div>
    @endif

    @if (Session::get('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="limiter">
        <div class="container-login100" style="background-color: #06BBCC;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action="{{ route('loginStore') }}" method="post" style="padding: 50px;">
                    @csrf
                    <h3 style="font-family: arial; text-align:center;">
                        Form Login
                    </h3>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Masukan Email">
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Masukan password">
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" style="background-color: #06BBCC;">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <script src="js/main.js"></script>

</body>

</html>
