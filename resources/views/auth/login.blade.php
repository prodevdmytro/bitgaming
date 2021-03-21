<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Gaming Website | Login</title>

    <meta name="description" content="Gaming website using BTC and ETH">
    <meta name="keywords" content="game, gaming, Laravel, blockchain, BTC, ETH, online">
    <meta name="author" content="_Andrey">

    <link rel="icon" type="image/png" href="{{ url('assets/images/favicon.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/goodgames.css') }}">
    <style>
    body { 
        background: url('/assets/images/1.jpg') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .body-overlay {
        background: rgba(0, 0, 0, 0.5);
        height: 100vh;
    }
    .card{
        margin-top: 40vh;
        background: #171e22;
        opacity: 0.9; 
    }
    </style>
</head>

<body>
<div class="body-overlay">
    <div class="nk-main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">

                                    <div class="col-md-8 offset-md-2">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-8 offset-md-2">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row mb-0 mt-10">
                                    <div class="col-md-8 offset-md-2">
                                        @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}">
                                                <small>{{ __('Forgot Your Password?') }}</small>
                                            </a>
                                        @endif
                                            <a class="" href="{{ route('register') }}">
                                                <small class="float-right">Not a member, Sign Up</small>
                                            </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
        
