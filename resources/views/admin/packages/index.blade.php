<x-admin-layout>
    <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0">Packages</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <a href="{{  route("admin.packages.create") }}" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-2"></i> Ajouter un package</a>
                                        </div>
                                        <div class="table-responsive mt-3">
                                            <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Libellé</th>
                                                        <th>Prix</th>
                                                        <th>Durée</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($packages as $package)
                                                        <tr>
                                                            <td>{{ $package->lib_pack }}</td>
                                                            <td>{{ $package->prix_pack }}</td>
                                                            <td>{{ $package->duree_pack }}</td>
                                                            <td>
                                                                <a href="{{ route("admin.packages.edit", $package) }}" class="btn btn-primary btn-sm" style="color: white"><i class="mdi mdi-pencil"></i>Editer</a>
                                                                <form class="form-del"  style="display: inline-block" action="{{ route("admin.packages.delete", $package) }}" method="post">
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
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>

</x-admin-layout>
