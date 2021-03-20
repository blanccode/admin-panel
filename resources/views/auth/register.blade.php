
@extends('index')

@section('content')

@if (request()->is('admin/register'))
    @include('admin.register')
@else
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 ">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">{{ __('Register') }}</h1>
    
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary border-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
                            <div class="text-center">
                                <a href="#" class="btn btn-neutral btn-icon mr-4">
                                    <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
                                    <span class="btn-inner--text">Github</span>
                                </a>
                                <a href="#" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
                                    <span class="btn-inner--text">Google</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Or sign up with credentials</small>
                            </div>
                            @isset($record)
                            <form method="POST" action="{{ url("register") }}">
                                @else
                                <form method="POST" action="{{ route('register') }}">
                                    @endisset
    
                                    @csrf
    
                                    {{-- <div class="form-group">
                                                <div class="input-group input-group-merge input-group-alternative mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                                    </div>
    
                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                                        name="name" value="{{ old('name') }}" required autocomplete="name"
                                    autofocus>
    
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        </div>
                    </div> --}}
    
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
    
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
    
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                name="password" required autocomplete="new-password">
    
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
    
                            <input id="password-confirm" type="password" class="form-control"
                                placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required
                                autocomplete="new-password">
    
                        </div>
                    </div>
    
                    <div class="text-muted font-italic">
                        <small>password strength:
                            <span class="text-success font-weight-700"></span>
                        </small>
                    </div>
    
                    <div class="row my-4">
                        <div class="col-12">
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id="customCheckRegister" type="checkbox">
    
                                <label class="custom-control-label" for="customCheckRegister">
                                    <span class="text-muted">I agree with the <a href="#!">Privacy
                                            Policy</a></span>
                                </label>
                            </div>
                        </div>
                    </div>
    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mt-4">{{ __('Register') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
@endif 
@endsection
                
            
