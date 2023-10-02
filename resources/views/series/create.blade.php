<x-layout title='Nova Série'>

    <form action="/series/salvar" method='post'>
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name='nome' class="form-control">
        </div>
        <input type="submit" value="Adicionar" class="btn btn-primary">
    </form>
</x-layout>
