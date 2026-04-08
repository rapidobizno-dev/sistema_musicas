<div class="row">
    {{-- taxa de conversão input --}}
    <div class="col-lg-4 mb-4">
        <label class="form-label">Taxa de conversão</label>
        <input type="number" name="rate" class="form-control" value="{{ old('rate', $rate->rate ?? '') }}"
            placeholder="Inserir o valor em kwanzas">
            <small>As taxas são em kwanzas Ex: 800, 300, etc.</small>
    </div>
    {{-- Botão de atualizar as alterações --}}
    <div class="col-12">
        <button type="submit" class="btn btn-dark"> Salvar
            <i class="feather-save ms-2"></i>
        </button>
    </div>
</div>
