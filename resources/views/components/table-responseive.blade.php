<div>
    <div>
        @foreach ($products as $product)
            <div class="bg-white margin-table-responsive  mb-4 p-4 rounded-lg shadow-lg w-75">
                <div class="d-flex  aling-items-center text-sm">
                    <div class="gx-1 rounded-lg">
                        <p><strong>Nome do Produto:</strong> {{ $product->name }}</p>
                        <div class="d-inline-flex justify-content-end">
                            <form action="{{ route('product.destroy', $product) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <a href="{{ route('product.edit', $product) }}" type="button"
                                    class="btn btn-sm btn-outline-warning">Editar</a>
                                <button type="submit" class="btn btn-sm btn-outline-danger">Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="text-sm items-center">
                    <div>
                        <span class="font-semibold text-blue-700"><strong>Categoria:
                            </strong>{{ $product->tags->first()->name }}</span>
                    </div>
                    <div>
                        <span class="font-semibold text-blue-700"><strong>Descrição:
                            </strong>{{ $product->description }} </span>
                    </div>
                    <div>
                        <span class="font-semibold text-blue-700"><strong>Quantidade:
                            </strong>{{ $product->tags->first()->pivot->amount }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
