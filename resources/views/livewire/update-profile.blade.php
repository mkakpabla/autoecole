<form wire:submit.prevent="updateUser" method="POST">
    <x-flash-message/>
    <div class="form-group">
        <label for="example-text-input" >Nom complet</label>
        <input type="text" wire:model.defer="name" class="form-control" required>
        @error("name")
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="example-text-input">Email</label>
        <input type="text" wire:model.defer="email" class="form-control" required>
        @error("email")
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="example-text-input">Entrer votre mot de passe</label>
        <input type="password" wire:model.defer="password" class="form-control" required>
        @error("password")
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <button class="btn btn-success">
            Enregsitrer
        </button>
    </div>
</form>
