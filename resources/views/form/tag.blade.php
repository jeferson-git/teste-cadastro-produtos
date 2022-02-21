@extends('layouts.basic')

@section('content')
    <section class="container mt-5 ">
        <div class="card ">
            <div class="card-body">
                <h1 class="py-4">
                    @if (isset($tag))
                        Editar Produto :
                    @else
                        Cadastro de Produtos:
                    @endif

                </h1>
                @if (isset($tag))
                    <form class="row align-items-end" action="{{ route('tag.update', $tag->id) }}" method="post" novalidate>
                        @csrf
                        @method('PUT')
                    @else
                        <form class="row row align-items-end" action="{{ route('tag.store') }}" method="post" novalidate>
                            @csrf
                @endif
                <div class=" col-md-6 com-sm-12">
                    <label class="" for="name">Nome</label>
                    <input name='name' type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ $tag->name ?? old('name') }}" required autocomplete="name" autofocus
                        placeholder="Digite o nome da Categoria...">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                </div>
                <div class=" col-md-6 com-sm-12 mt-3 mt-md-0 d-flex">
                    <a href="{{ route('tag.index') }}" type="button" class="btn btn-secondary me-3">Cancelar</a>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                </form>
            </div>
        </div>

    </section>
@endsection
