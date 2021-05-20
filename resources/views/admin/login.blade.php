<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>AutoPlus | Administration - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset("assets/css/bootstrap.min.css") }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset("assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset("assets/css/app.min.css") }}" id="app-style" rel="stylesheet" type="text/css" />
    @livewireStyles()
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
</head>

<body class="auth-body-bg">
    <div class="home-btn d-none d-sm-block">
        <a href="{{ url("/") }}"><i class="mdi mdi-home-variant h2 text-white"></i></a>
    </div>
    <div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        <div class="text-center">
                                            <div>
                                                <a href="index.html" class="logo"><img src="{{ asset("assets/images/logo-dark.png") }}"
                                                        height="20" alt="logo"></a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Bienvenue</h4>
                                            <p class="text-muted">Entrer vos informations de connexion.</p>
                                        </div>

                                        <div class="p-2 mt-5">
                                            @livewire("login-form")
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="authentication-bg">
                        <div class="bg-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @livewireScripts()
    <script src="{{ asset("/js/app.js") }}"></script>


</body>

</html>
