<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{ $title }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('image/icon.ico') }}">
        <link href="{{ asset('css/styles-auth.css') }}" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/640799ae48.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    </head>
    <style>
        .btn-social {
            height: 2.5rem;
            width: 2.5rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            border-radius: 100%;
        }
    </style>
    <body class="bg-light" style="font-family: Montserrat">

        @yield('content')

            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto shadow-lg">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-dark ml-3">Copyright &copy; <script>document.write(new Date().getFullYear());</script><b class="text-primary"><a href="/" style="text-decoration: none"> KelasIOT </a></b></div>
                            <div class="mr-3">
                                <a class="btn btn-light btn-social mx-3" style="border: 1px solid gray" target="_blank" href="https://github.com/ferdyhw"><i class="fab fa-github"></i></a>
                                <a class="btn btn-light btn-social mx-3" style="border: 1px solid gray" target="_blank" href="https://gitlab.com/ferdyhw"><i class="fab fa-gitlab"></i></a>
                                <a class="btn btn-light btn-social mx-3" style="border: 1px solid gray" target="_blank" href="https://discordapp.com/users/724036204902744085"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts-auth.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('js/myscript.js') }}"></script> 
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="bootstrap-show-password.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>
        	$('.custom-file-input').on('change', function() {
        		let fileName = $(this).val().split('\\').pop();
        		$(this).next('.custom-file-label').addClass("selected").html(fileName);
        	});
        </script>
    </body>
</html>