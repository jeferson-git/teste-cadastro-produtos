@extends('layouts.basic')

@section('content')
    <section class="container mt-5 ">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col d-flex justify-content-start ">
                        <h1 class="py-4">Lista de Produtos: </h1>
                    </div>
                    <div class="col d-flex justify-content-end align-self-center ">
                        <button type="submit" class="btn btn-success">Cadastrar novo Produto</button>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Caneta</td>
                            <td>Material Escolar</td>
                            <td>Caneta azul, Bic</td>
                            <td>250</td>
                            <td><button type="button" class="btn btn-sm btn-outline-warning">Editar</button></td>
                            <td><button type="button" class="btn btn-sm btn-outline-danger">Excluir</button></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Caneta</td>
                            <td>Material Escolar</td>
                            <td>Caneta azul, Bic</td>
                            <td>250</td>
                            <td><button type="button" class="btn btn-sm btn-outline-warning">Editar</button></td>
                            <td><button type="button" class="btn btn-sm btn-outline-danger">Excluir</button></td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Caneta</td>
                            <td>Material Escolar</td>
                            <td>Caneta azul, Bic</td>
                            <td>250</td>
                            <td><button type="button" class="btn btn-sm btn-outline-warning">Editar</button></td>
                            <td><button type="button" class="btn btn-sm btn-outline-danger">Excluir</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
