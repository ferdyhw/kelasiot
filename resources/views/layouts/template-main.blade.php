<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Header Home -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{ $title }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('image/icon.ico') }}"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://kit.fontawesome.com/640799ae48.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('vendor/home-page/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top" style="font-family: Montserrat">

        @include('layouts/navbar/navbar-main')

        @yield('content')

        <!-- Footer-->
        <footer class="footer py-3" style="background-color: #212529; border-top: 2px solid #17a2b8">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left text-light">Copyright &copy; <script>document.write(new Date().getFullYear());</script><b class="text-info" > KelasIOT </b></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-info btn-social mx-3" style="background-color: #212529" target="_blank" href="https://github.com/ferdyhw"><i class="fab fa-github"></i></a>
                        <a class="btn btn-info btn-social mx-3" style="background-color: #212529" target="_blank" href="https://gitlab.com/ferdyhw"><i class="fab fa-gitlab"></i></a>
                        <a class="btn btn-info btn-social mx-3" style="background-color: #212529" target="_blank" href="https://discordapp.com/users/724036204902744085"><i class="fab fa-discord"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right text-light">
                        <a class="mr-3 text-light" href="#privacy-policy">Privacy Policy</a>
                        <a class="mr-3 text-light" href="#terms-of-use">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <!-- Core theme JS-->
        <script src="{{ asset('vendor/home-page/js/scripts.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('js/myscript.js') }}"></script> 
    </body>
</html>