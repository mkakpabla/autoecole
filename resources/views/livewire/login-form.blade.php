<form class="form-horizontal" wire:submit.prevent="loginUser">
    <x-flash-message />
    <div class="form-group auth-form-group-custom mb-4">
        <i class="ri-user-2-line auti-custom-input-icon"></i>
        <label for="username">Email</label>
        <input type="text" class="form-control" wire:model.defer="credentials.email" id="username"
            placeholder="Entrer votre email">
    </div>

    <div class="form-group auth-form-group-custom mb-4">
        <i class="ri-lock-2-line auti-custom-input-icon"></i>
        <label for="userpassword">Mot de passe</label>
        <input type="password" class="form-control" wire:model.defer="credentials.password" id="userpassword"
            placeholder="Entrer votre mot de passe">
    </div>


    <div class="mt-4 text-center">
        <button class="btn btn-primary btn-lg w-md waves-effect waves-light" type="submit">
            <span>Se Connecter</span>
            <spinning-dots wire:loading style="width: 20px;" />
        </button>
    </div>
</form>
