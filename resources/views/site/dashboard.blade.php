@extends('layouts.basic')

@section('content')
    <section class="container mt-5 ">
        @component('components.navbar')
        @endcomponent
        <div class="card">
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col d-flex justify-content-start ">
                        <h1 class="py-4">Lista de Produtos: </h1>
                    </div>
                    <div class="col w-100  align-self-center">
                        <form action="{{ route('product.filter')}}"class="d-flex" method="POST">
                            @csrf
                            <input class="form-control me-2" type="search" name="filter"
                                placeholder="Filtre por Nome e/ou Categoria" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Filtrar</button>
                        </form>
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
                            <th scope="col">Quantidade</th>
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
                                    <td>
                                        <form action="{{ route('product.destroy', $product) }}" method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <nav aria-label="NavBar">
                        <ul class="pagination ">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
