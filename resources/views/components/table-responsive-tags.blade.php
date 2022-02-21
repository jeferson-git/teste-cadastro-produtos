<div>
    <div>
        @foreach ($tags as $tag)
            <div class="bg-white margin-table-responsive  mb-4 p-4 rounded-lg shadow-lg w-75">
                <div class="d-flex  aling-items-center text-sm">
                    <div class="gx-1 rounded-lg">
                        <p><strong>Nome da Categoria:</strong> {{ $tag->name }}</p>
                        <div class="d-inline-flex justify-content-end">
                            <a href="{{ route('tag.edit', $tag) }}" type="button"
                                class="btn btn-sm btn-outline-warning me-3">Editar</a>
                            <form action="{{ route('tag.destroy', $tag) }}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-danger">Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
