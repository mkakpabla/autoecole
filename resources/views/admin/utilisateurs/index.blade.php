<x-admin-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Utilisateurs</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <a href="{{  route("admin.users.create") }}" class="btn btn-success mb-2"><i
                                            class="mdi mdi-plus mr-2"></i> Ajouter un utilisateur</a>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table table-centered datatable dt-responsive nowrap "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Nom complet</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>

                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <a href="{{ route("admin.users.edit", $user) }}"
                                                        class="btn btn-primary btn-sm" style="color: white"><i
                                                            class="mdi mdi-pencil"></i>Editer</a>
                                                            <a href="{{ route("admin.users.reset-password", $user) }}" class="btn btn-success btn-sm" style="color: white"><i
                                                                    class="mdi mdi-pencil"></i>Rénitialiser</a>
                                                    <form class="form-del" style="display: inline-block" action="{{ route("admin.users.delete", $user) }}"
                                                        method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="btn btn-danger btn-sm"><i
                                                                class="mdi mdi-trash-can"></i>Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ajouter un utilisateur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="storeUser" method="POST">
                            <div class="row">

                                <div class="form-group col-md-12">
                                    <label for="name">Nom complet</label>
                                    <input type="text" wire:model.defer="user.name" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Email</label>
                                    <input type="email" wire:model.defer="user.email" class="form-control">
                                </div>

                                <div class="form-group col-md-12">
                                    <button class="btn btn-success">
                                        Enregsitrer
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
