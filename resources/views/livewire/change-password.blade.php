<form wire:submit.prevent="update()" method="POST">
    <x-flash-message/>
    <div class="form-group">
        <label for="example-text-input">Nouveau mot de passe</label>
        <input type="password" wire:model.defer="new_password" class="form-control" required>
        @error("new_password")
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="example-text-input">RE: Nouveau mot de passe</label>
        <input type="password" wire:model.defer="new_password_confirmation" class="form-control" required>
        @error("new_password_confirmation")
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="example-text-input">Entrer votre ancien mot de passe</label>
        <input type="password" wire:model.defer="old_password" class="form-control" required>
        @error("old_password")
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-success">
            Enregsitrer
        </button>
    </div>
</form>
