@extends('layouts.basic')

@section('content')
    <section class="container mt-5 ">
        <div class="card ">
            <div class="card-body">
                <h1 class="py-4">Cadastro de Produtos: </h1>
                <form class="row gy-2 gx-3">
                    <div class=" col-md-5 com-sm-12">
                        <label class="" for="product">Produto</label>
                        <input type="text" class="form-control" id="product" placeholder="Digite o nome do produto...">
                    </div>
                    <div class=" col-md-5 com-sm-12">
                        <label class="" for="tag">Categorias</label>
                        <select class="form-select" id="tag">
                            <option selected>Escolha a categoria..</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class=" col-md-2 com-sm-12">
                        <label class="" for="product">Quantidade</label>
                        <input type="text" class="form-control" id="product" placeholder="Digite a quantidade...">
                    </div>
                    <div class="col-md-12 com-sm-12 mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea class="form-control" id="description" rows=6></textarea>
                    </div>
                    <div class=" d-flex justify-content-end ">
                        <button type="submit" class="btn btn-secondary me-3">Cancelar</button>
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
