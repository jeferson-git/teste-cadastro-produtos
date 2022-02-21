@extends('layouts.basic')

@section('content')
    <section class="container mt-5 ">
        @component('components.navbar')
        @endcomponent
        <div class="card">
            <div class="card-body">
                <div class="row d-flex flex-md-row flex-column">
                    <div class="col align-self-center">
                        <h1 class="py-4 ">Lista de Produtos: </h1>
                    </div>
                    <div class="col w-md-100 w-75  align-self-center">
                        <form action="{{ route('product.filter') }}" class="d-flex" method="POST">
                            @csrf
                            <input class="form-control me-2" type="search" name="filter"
                                placeholder="Filtre por Nome e/ou Categoria" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Filtrar</button>
                        </form>
                    </div>
                    <div class="col w-md-75  d-flex my-3 justify-content-center align-self-center ">
                        <a href="{{ route('product.create') }}" class="btn btn-success w-75">Cadastrar novo Produto</a>
                    </div>
                </div>
                <table class="table d-none d-md-table table-responsive text-center">
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
                <div class="d-flex d-md-none ms-3 justify-content-sm-center ">
                    @component('components.table-responseive', ['products' => $products])
                    @endcomponent
                </div>
                @if (!isset($paginate))
                    <div class="d-flex justify-content-center">
                        <nav aria-label="NavBar">
                            <ul class="pagination ">
                                <li class="page-item">
                                    <a class="page-link" href="{{ route('product.filter', 'page=' . 1)}}" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="page-item"><a class="page-link" href="{{ route('product.filter', 'page=' . $i)}}">{{ $i }}</a></li>
                                @endfor
                                <li class="page-item">
                                    <a class="page-link" href="{{ route('product.filter', 'page=' . $products->lastPage())}}" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
