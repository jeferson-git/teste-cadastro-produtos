@extends('layouts.basic')

@section('content')
    <section class="container mt-5 ">
        @component('components.navbar')
        @endcomponent
        <div class="card">
            <div class="card-body">
                <div class="row d-flex flex-md-row flex-column">
                    <div class="col align-self-center">
                        <h1 class="py-4 ">Lista de Categorias: </h1>
                    </div>
                    <div class="col w-md-100 w-75  align-self-center">
                        <form action="{{ route('tag.filter') }}" class="d-flex" method="POST">
                            @csrf
                            <input class="form-control me-2" type="search" name="filter"
                                placeholder="Filtre por Nome" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Filtrar</button>
                        </form>
                    </div>
                    <div class="col w-md-75  d-flex my-3 justify-content-center align-self-center ">
                        <a href="{{ route('tag.create') }}" class="btn btn-success w-75">Cadastrar nova Categoria</a>
                    </div>
                </div>
                <table class="table d-none d-md-table table-responsive text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <th scope="row">{{ $tag->id }}</th>
                                <td>{{ $tag->name }}</td>
                                <td><a href="{{ route('tag.edit', $tag) }}" type="button"
                                        class="btn btn-sm btn-outline-warning">Editar</a></td>
                                <td>
                                    <form action="{{ route('tag.destroy', $tag) }}" method="POST">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex d-md-none ms-3 justify-content-sm-center ">
                    @component('components.table-responsive-tags', ['tags' => $tags])
                    @endcomponent
                </div>
                @if (!isset($paginate))
                    <div class="d-flex justify-content-center">
                        <nav aria-label="NavBar">
                            <ul class="pagination ">
                                <li class="page-item">
                                    <a class="page-link" href="{{ route('tag.filter', 'page=' . 1) }}"
                                        aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                @for ($i = 1; $i <= $tags->lastPage(); $i++)
                                    <li class="page-item"><a class="page-link"
                                            href="{{ route('tag.filter', 'page=' . $i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item">
                                    <a class="page-link"
                                        href="{{ route('tag.filter', 'page=' . $tags->lastPage()) }}"
                                        aria-label="Next">
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
