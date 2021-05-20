<form wire:submit.prevent="storeUser" method="POST">
    <div class="form-group row">
        <label for="example-text-input" class="col-md-2 col-form-label">Nom complet</label>
        <div class="col-md-10">
            <input type="text" wire:model.defer="state.name" class="form-control" required>
            @error("name")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
        <div class="col-md-10">
            <input type="text" wire:model.defer="state.email" class="form-control" required>
            @error("email")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 left">
            <button class="btn btn-success">
                Enregsitrer
            </button>
        </div>
    </div>
</form>
