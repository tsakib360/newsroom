<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('admin/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="{{asset('admin/assets/images/logo.png')}}" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            <form method="POST" action="{{route('login_process')}}">
                @csrf
                <div class="form-group">
                    <input class="form-control form-control-lg" id="email" type="email" placeholder="Email" name="email" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" type="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Create An Account</a></div>
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Forgot Password</a>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="{{asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
@include('sweetalert::alert')
</body>

</html>