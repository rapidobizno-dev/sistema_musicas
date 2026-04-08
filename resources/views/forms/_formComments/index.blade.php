<div class="row">
    {{-- Nome --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Primeiro Nome</label>
        <input type="text" name="first_name" placeholder="Primeiro nome" class="form-control"
            value="{{ old('nome', $comment->first_name ?? '') }}">
    </div>

    {{-- Último Nome --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Último nome</label>
        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $comment->last_name ?? '') }}"
            placeholder="ex: Silva, Santos...">
    </div>

    {{-- Date --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Data de Publicação</label>
        <input type="date" name="date" class="form-control"
            value="{{ old('date', $comment->date ?? date('Y-m-d')) }}">
    </div>

    {{-- Comentário --}}
    <div class="col-lg-12 mb-4">
        <label class="form-label">Comentário</label>
       <textarea class="form-control" name="coment" cols="5" rows="5">{{ old('coment', $comment->comment ?? '') }}</textarea>
    </div>

    {{-- Botão de Enviar --}}
    <div class="col-12">
        <button type="submit" class="btn btn-dark"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
