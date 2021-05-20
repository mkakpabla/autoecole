<form wire:submit.prevent="{{ $id_tge ? 'updateTge()' : 'storeTge()' }}" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col-md-12">
            <label for="nom_tge">Nom et prénom du témoignant</label>
            <input type="text" wire:model.defer="nom_tge" class="form-control" required>
            @error("nom_tge")
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-12">
            <label for="contenu_tge">Contenu du témoignage</label>
            <textarea class="form-control" wire:model.defer="contenu_tge" name="contenu_tge" id="contenu_tge" cols="30"
                rows="5"></textarea>
            @error("contenu_tge")
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-12">
            <button class="btn btn-success">
                Enregsitrer
            </button>
        </div>
    </div>
</form>
