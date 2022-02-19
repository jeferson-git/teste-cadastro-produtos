@extends('layouts.basic')

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
            @if (isset($invalidCredentials) && $invalidCredentials == 1)
                <div class="alert ball alert-danger" role="alert">
                    Usuário ou Senha Inválidos !
                </div>
            @endif
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-login text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-2 mt-md-2 pb-2">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h2 class="   fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5 >Digite seu Email e Password"></p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" name="email"
                                            class="form-control form-control-lg  @error('email') is-invalid @enderror"
                                            required autocomplete="email" autofocus value="{{ old('email') }}" />
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password"
                                            value="{{ old('password') }}" />

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                </form>

                            </div>

                            <div>
                                <p class="mb-0">Não tem conta ? <a href="{{route('register.index')}}"
                                        class="text-white-50 fw-bold">Cadastre-se</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
