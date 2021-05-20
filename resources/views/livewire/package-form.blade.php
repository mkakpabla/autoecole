<form wire:submit.prevent="{{ $id_pack ? 'updatePackage()' : 'store()' }}" method="POST">
    @csrf
    <div class="row">
        <div class="form-group col-md-12">
            <label for="">Libellé</label>
            <input type="text" wire:model.defer="lib_pack" class="form-control" required>
            @error("lib_pack")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="">Prix</label>
            <input type="number" wire:model.defer="prix_pack" class="form-control" required min="25">
            @error("prix_pack")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="">Durée</label>
            <input type="number" wire:model.defer="duree_pack" class="form-control" required min="1">
            @error("duree_pack")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-12">
            <label for="">Description</label>
            <textarea class="form-control" wire:model.defer="desc_pack" name="desc_pack" id="desc_pack" cols="30" rows="5"></textarea>
            @error("desc_pack")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group col-md-12">
            <button class="btn custom-btn btn-success">

                <span>Enregsitrer</span>
                <spinning-dots wire:loading style="width: 20px;" />
            </button>
        </div>
    </div>
</form>
