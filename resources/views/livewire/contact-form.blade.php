<div class="contact__form">
    @if (session("message_send"))
        <div class="message_send">
            {{ session("message_send") }}
        </div>
    @endif
    <form wire:submit.prevent="store()" method="post">
        <div class="col_row">
            <div class="form-group">
                <label for="name">Nom complet</label>
                <input type="text" wire:model.defer="name" class="form-control" />
            </div>
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="text" wire:model.defer="phone" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" wire:model.defer="message" name="message" id="message" cols="30" rows="5"></textarea>
        </div>
        <div>
            <button type="submit" class="btn-contact">Envoyer le message</button>
        </div>
    </form>
</div>
