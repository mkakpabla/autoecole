<x-admin-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Témoignages</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <a href="{{  route("admin.temoignages.create") }}" class="btn btn-success mb-2"><i
                                            class="mdi mdi-plus mr-2"></i> Ajouter un témoignage</a>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table table-centered datatable dt-responsive nowrap "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Nom et prénom(s)</th>
                                                <th>Contenu</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($temoignages as $tge)
                                            <tr>
                                                <td>{{ $tge->nom_tge }}</td>
                                                <td>{{ $tge->contenu_tge }}</td>
                                                <td style="width: 200px">
                                                    <a href="{{ route("admin.temoignages.edit", $tge) }}"
                                                        class="btn btn-primary btn-sm" style="color: white"><i
                                                            class="mdi mdi-pencil"></i>Editer</a>
                                                    <form class="form-del" style="display: inline-block"
                                                        action="{{ route("admin.temoignages.delete", $tge) }}"
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
    </div>

</x-admin-layout>
