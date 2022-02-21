@extends('layouts.basic')

@section('content')
    <section class="container mt-5 ">
        <div class="card ">
            <div class="card-body">
                <h1 class="py-4">
                    @if (isset($product))
                        Editar Produto :
                    @else
                        Cadastro de Produtos:
                    @endif
                </h1>
                @if (isset($product))
                    <form class="row gy-2 gx-3" action="{{ route('product.update', $product->id) }}" method="post"
                        novalidate>
                        @csrf
                        @method('PUT')
                    @else
                        <form class="row gy-2 gx-3" action="{{ route('product.store') }}" method="post" novalidate>
                            @csrf
                @endif
                <div class=" col-md-5 com-sm-12">
                    <label class="" for="product">Produto</label>
                    <input name='name' type="text" class="form-control" id="product"
                        placeholder="Digite o nome do produto..." value="{{ $product->name ?? old('name') }}">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}
                </div>
                <div class="      col-md-5 com-sm-12">
                    <label class="" for="tag">Categorias</label>
                    <select name="tag" class="form-select" id="tag">
                        <option>Escolha a categoria..</option>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"
                                @if (isset($product)) {{ ($product->tags->first()->id ?? old('tag')) == $tag->id ? 'selected' : '' }}> 
                                    @else
                                    {{ old('tag') == $tag->id ? 'selected' : '' }}> @endif
                                {{ $tag->name }}</option>
                        @endforeach
                    </select>
                    {{ $errors->has('tag') ? $errors->first('tag') : '' }}
                </div>
                <div class="col-md-2 com-sm-12">
                    <label class="" for="amount">Quantidade</label>
                    <input name="amount" type="text" class="form-control" id="amount" placeholder="Digite a quantidade..."
                        @if (isset($product)) @foreach ($product->tags as $tag)
                            {{ $tag->pivot->amount }}
                            value="{{ $tag->pivot->amount ?? old('amount') }}" @endforeach
                    @else value={{ old('amount') }} @endif
                    >
                    {{ $errors->has('amount') ? $errors->first('amount') : '' }}
                </div>
                <div class="col-md-12 com-sm-12 mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea name="description" class="form-control" id="description"
                        rows=6>{{ $product->description ?? old('description') }}</textarea>
                    {{ $errors->has('description') ? $errors->first('description') : '' }}
                </div>
                <div class=" d-flex justify-content-end ">
                    <a href="{{ route('index.dashboard') }}" type="button" class="btn btn-secondary me-3">Cancelar</a>
                    <button type="submit" class="btn btn-success">
                        @if (isset($product))
                            Atualizar
                        @else
                            Cadastrar
                        @endif
                    </button>
                </div>
                </form>
            </div>
        </div>

    </section>
@endsection
