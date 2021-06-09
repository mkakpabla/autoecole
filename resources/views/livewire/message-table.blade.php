<div>
    <div>
        <select class="form-control" wire:model="status">
            <option value="unread">Non lu</option>
            <option value="read">Lu</option>
        </select>
    </div>
    @if (session("success"))
    <div class="alert alert-success">
        {{ session("success") }}
    </div>
    @endif
    <div class="table-responsive mt-3">
        <table class="table table-centered datatable dt-responsive nowrap "
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead class="thead-light">
                <tr>
                    <th>Envoyé par</th>
                    <th>Téléphone</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->sender_nom }}</td>
                    <td>{{ $message->sender_phone }}</td>
                    <td>{{ $message->contenu_msg }}</td>
                    <td>
                        @if ($message->status === "unread")
                            <a wire:click.prevent="read({{ $message }})" class="btn btn-primary btn-sm" style="color: white"><i
                                    class="mdi mdi-pencil"></i>Marqué comme lu</a>
                        @endif
                        <form class="form-del" style="display: inline-block" action="" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger btn-sm"><i class="mdi mdi-trash-can"></i>Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
