<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title> Ecommerce Admin & Dashboard</title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
        <link href="{{ url('source/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />
        <link href="{{ url('source/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
        <!-- PLUGINS CSS STYLE -->
        <link href="{{ url('source/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
        <!-- MONO CSS -->
        <link id="main-css-href" rel="stylesheet" href="{{ url('source/css/style.css') }}" />
        <!-- FAVICON -->
        <link href="{{ url('source/images/favicon.png') }}" rel="shortcut icon" />
        <script src="{{ url('source/plugins/nprogress/nprogress.js') }}"></script>
    </head>

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="card card-default mb-0">
                        <div class="card-header pb-0">
                            <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                                <a class="w-auto pl-0" href="/index.html">
                                    <img src="{{ url('source/images/logo.png') }}" alt="Mono">

                                </a>
                            </div>
                        </div>
                        <div class="card-body px-5 pb-5 pt-0">
                            @if (Session::has('Error'))
                                <p class="text-danger">{{ Session::get('Error') }}</p>
                            @endif
                            @if (Session::has('success'))
                                <p class="text-success">{{ Session::get('success') }}</p>
                            @endif

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                @method('post')
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" class="form-control input-lg" name="email"
                                            id="email" placeholder="Email">
                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control input-lg" id="password"
                                            name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md-12">

                                        <div class="d-flex justify-content-between mb-3">
                                            <a class="text-color" href="#"> Forgot password? </a>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-pill mb-4" value="Login">Sign
                                            In</button>

                                        <p>Don't have an account yet ?
                                            <a class="text-blue" href="{{ route('register') }}">Sign Up</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
