<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template/assets/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('template/assets/img/favicon.png') }}">
        <title>
            Material Dashboard 3 by Creative Tim
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('template/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('template/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('template/assets/css/material-dashboard.css?v=3.2.0') }}"
            rel="stylesheet" />
    </head>

    <body class="bg-gray-200">
        <main class="main-content  mt-0">
            <div class="page-header align-items-start min-vh-100">
                <div class="container my-auto">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-12 mx-auto">
                            <div class="card z-index-0 fadeIn3 fadeInBottom">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <img height="100px" src="{{ asset('template/assets/img/whitelandscape.png') }}"
                                            alt="">
                                    </div>
                                    <form role="form" class="text-start" method="POST" action="{{ url('/') }}">
                                        @csrf
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-gradient-success w-100 my-4 mb-2">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--   Core JS Files   -->
        <script src="{{ asset('template/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('template/assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('template/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('template/assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>
    </body>

</html>
