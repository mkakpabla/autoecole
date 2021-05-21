<div>
    <div class="row">
        <div class="custom-control col custom-radio mb-3">
            <input type="radio" id="is_read" name="status" class="custom-control-input">
            <label class="custom-control-label" for="is_read">Non lu</label>
        </div>
        <div class="custom-control col custom-radio mb-3">
            <input type="radio" id="not_read" name="status" class="custom-control-input">
            <label class="custom-control-label" for="not_read">Déja lu</label>
        </div>
    </div>
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
                    <td style="width: 200px">
                        <a href="" class="btn btn-primary btn-sm"
                            style="color: white"><i class="mdi mdi-pencil"></i>Marqué comme lu</a>
                        <form class="form-del" style="display: inline-block"
                            action="" method="post">
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
