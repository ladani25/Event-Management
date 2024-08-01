{{-- @include('front-end.header') --}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ url('public/admin/img/logo/logo.png" rel="icon') }}">
    <title>RuangAdmin - Login</title>
    <link href="{{ url('public/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('public/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('public/admin/css/ruang-admin.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-login" background="{{ url('public/front-end/img/hero-bg.png') }}">
    <!-- Register Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-3 col-md-3">
                <div class="card shadow-sm my-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form class="user" action="{{ url('user_register') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label> Name</label>
                                            <input type="text" name="name" class="form-control"
                                                id="exampleInputFirstName" placeholder="Enter First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="phone_number" class="form-control"
                                                id="exampleInputLastName" placeholder="Enter Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>

                                    </form>

                                    <div class="text-center">
                                        <a class="font-weight-bold small" href="{{ url('login') }}">Already have an
                                            account?</a>
                                    </div>
                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Content -->
    <script src="{{ url('public/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('public/admin/vendor/bootstrap/js/bootstrap.bundle.min.j') }}s"></script>
    <script src="{{ url('public/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ url('public/admin/js/ruang-admin.min.js') }}"></script>
</body>


</html>

{{-- @include('front-end.footer') --}}
