@extends('layouts.basic')

@section('content')
    <section class="container mt-5 ">
        <div class="card ">
            <div class="card-body">
                <h1 class="py-4">Cadastro de Usuário: </h1>
                <form class="row gy-2 gx-3" action="{{ route('register.store') }}" method="post" novalidate>
                    @csrf
                    <div class=" col-md-6 com-sm-12">
                        <label class="" for="name">Nome</label>
                        <input name='name' type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required autocomplete="name" autofocus
                            placeholder="Digite seu Nome...">
                        {{ $errors->has('name') ? $errors->first('name') : '' }}
                    </div>
                    <div class="col-md-6 com-sm-12">
                        <label class="" for="email">Email</label>
                        <input name="email" type="text" class="form-control" id="email"
                            placeholder="Digite seu Email..." value="{{ old('email') }}">
                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                    </div>
                    <div class="col-md-6 com-sm-12">
                        <label class="" for="password">Senha</label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="Digite sua Senha..." value="{{ old('password') }}">
                        {{ $errors->has('password') ? $errors->first('password') : '' }}
                    </div>
                    <div class="col-md-6 com-sm-12">
                        <label class="" for="password_confirmation">Confirma sua Senha</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
                            placeholder="Confirma sua Senha..." value="{{ old('password_confirmation') }}">
                        {{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' }}
                    </div>
                    <div class=" d-flex justify-content-end ">
                        <a href="{{ route('index.dashboard') }}" type="button" class="btn btn-secondary me-3">Cancelar</a>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
