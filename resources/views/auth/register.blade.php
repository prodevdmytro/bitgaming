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
        background: url('/assets/images/2.jpg') no-repeat center center fixed; 
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
        margin-top: 30vh;
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
                <div class="col-md-6 offset-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0"><span class="text-main-1">Sign</span> Up</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>
                                    <div class="col-md-6">
                                        <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" placeholder="birthdate">

                                        @error('birthdate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirmation">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">
                                            {{ __('Register') }}
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
                                            <a class="" href="{{ route('login') }}">
                                                <small class="float-right">Already registered, Sign In</small>
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
        
