@extends('layouts.app')

@section('content')
    <main class="auth-minimal-wrapper">
        <div class="auth-minimal-inner">
            <div class="minimal-card-wrapper">
                <div class="card mb-4 mt-5 mx-4 mx-sm-0 position-relative">
                    <div
                        class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50">
                        <img src="{{ url('assets/radar-img/favicon.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body p-sm-5">
                        <h2 class="fs-20 fw-bolder mb-4">Conecte-se</h2>
                        <h4 class="fs-13 fw-bold mb-2">Entre na sua conta</h4>
                        <p class="fs-12 fw-medium text-muted">Acesso restrito, <strong>Admin</strong> dasboard.</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembre-se de mim') }}
                                        </label>
                                    </div>
                                </div>
                                
                                <div>
                                    @if (Route::has('password.request'))
                                    <a class="fs-11 text-primary" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-lg btn-dark w-100">{{ __('Entrar') }}</button>
                            </div>
                        </form>
                        <div class="w-100 mt-5 text-center mx-auto">
                            <div class="mb-4 border-bottom position-relative"><span
                                    class="small py-1 px-3 text-uppercase text-muted bg-white position-absolute translate-middle">or</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" title="Login with Facebook">
                                    <i class="feather-facebook"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" title="Login with Twitter">
                                    <i class="feather-twitter"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" title="Login with Github">
                                    <i class="feather-github text"></i>
                                </a>
                            </div>
                        </div>
                        {{-- <div class="mt-5 text-muted">
                            <span> Não tem uma conta?</span>
                            <a href="{{ route('register')}}" class="fw-bold">Criar conta</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
