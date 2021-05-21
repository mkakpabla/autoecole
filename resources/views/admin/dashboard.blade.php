<x-admin-layout>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Dashboard</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Packages</p>
                                        <h4 class="mb-0">{{ $packCount }}</h4>
                                    </div>
                                    <div class="text-primary">
                                        <i class="ri-archive-fill font-size-24"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Messages non lus</p>
                                        <h4 class="mb-0">{{ $messages->count() }}</h4>
                                    </div>
                                    <div class="text-primary">
                                        <i class="ri-message-line font-size-24"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body overflow-hidden">
                                        <p class="text-truncate font-size-14 mb-2">Témoignages</p>
                                        <h4 class="mb-0">{{ $tgeCount }}</h4>
                                    </div>
                                    <div class="text-primary">
                                        <i class="ri-user-voice-line font-size-24"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
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
                                                    <a href="" class="btn btn-primary btn-sm" style="color: white"><i class="mdi mdi-pencil"></i>Marqué
                                                        comme lu</a>
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
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


    </div>

</x-admin-layout>
