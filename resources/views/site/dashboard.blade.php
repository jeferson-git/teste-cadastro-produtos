@extends('layouts.basic')

@section('content')
<section class="container mt-5 ">
        @yield('top-navbar')
        <div class="card">
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col d-flex justify-content-start ">
                        <h1 class="py-4">Lista de Produtos: </h1>
                    </div>
                    <div class="col d-flex justify-content-end align-self-center ">
                        <a href="{{ route('product.create') }}" class="btn btn-success">Cadastrar novo Produto</a>
                    </div>
                </div>
                <table class="table table-responsive text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Qauntidade</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            @foreach ($product->tags as $tag)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $tag->pivot->amount }}</td>
                                    <td><a href="{{ route('product.edit', $product) }}" type="button"
                                            class="btn btn-sm btn-outline-warning">Editar</a></td>
                                    <td><a href="{{ route('product.destroy', $product) }}" type="button"
                                            class="btn btn-sm btn-outline-danger">Excluir</a></td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
