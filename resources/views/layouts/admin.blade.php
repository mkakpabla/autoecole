<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>AutoPlus | Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- CSRF Token -->
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset("assets/css/app.min.css") }}" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        .custom-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .custom-btn span {
            margin-right: 5px
        }
    </style>

    @livewireStyles()
</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ route("admin.index") }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset("assets/images/logo-sm-dark.png") }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset("assets/images/logo-dark.png") }}" alt="" height="20">
                            </span>
                        </a>

                        <a href="{{ route("admin.index") }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset("assets/images/logo-sm-light.png") }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset("assets/images/logo-light.png") }}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>
                </div>

                <div class="d-flex">



                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset("assets/images/users/avatar-2.jpg") }}"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ml-1">{{ auth()->user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" data-toggle="modal"
                                    data-target="#userProfile" href="#"><i class="ri-user-line align-middle mr-1"></i> Mon
                                profile</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="{{ route("admin.logout") }}"><i
                                    class="ri-shut-down-line align-middle mr-1 text-danger"></i> Se Deconnecter</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <x-admin-sidebar/>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        {{ $slot }}
        <!-- end main content-->


        <div class="modal fade" id="userProfile" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Mon Profile</h5>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" aria-label="Close">
                            Fermer
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab" aria-selected="true">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Mon Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab" aria-selected="false">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Changer le mot de passe</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="home1" role="tabpanel">
                                @livewire("update-profile")
                            </div>
                            <div class="tab-pane" id="profile1" role="tabpanel">
                                @livewire("change-password")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END layout-wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    @livewireScripts()
    <!-- JAVASCRIPT -->
    <script src="{{ asset("assets/libs/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/libs/metismenu/metisMenu.min.js") }}"></script>
    <script src="{{ asset("assets/libs/simplebar/simplebar.min.js") }}"></script>
    <script src="{{ asset("assets/libs/node-waves/waves.min.js") }}"></script>




    <script src="{{ asset("assets/js/app.js") }}"></script>

    <script src="{{ asset("/js/app.js") }}"></script>

</body>

</html>
