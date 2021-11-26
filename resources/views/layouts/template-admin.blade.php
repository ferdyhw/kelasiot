<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{ $title }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('image/icon.ico') }}">
        <link href="{{ asset('css/styles-auth.css') }}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('css/style-table.css') }}">
        <script type="text/javascript" src="{{ asset('vendor/ckeditors/ckeditor.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    </head>
    <body class="sb-nav-fixed bg-light" style="font-family: Montserrat">

        @include('layouts/navbar/navbar-admin')

        @yield('content')
        
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; <script>document.write(new Date().getFullYear());</script> <b class="text-info">KelasIOT</b></div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Modal Logout -->
    <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="modalLogoutLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLogoutLabel"><span class="text-info">|</span> Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <form action="/proses-logout" method="post">
                    @csrf
                    Yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                <button type="submit" class="btn btn-info"><i class="fas fa-check"></i> Ya</button>
                </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Password -->
    <div class="modal fade" id="modalPass" tabindex="-1" role="dialog" aria-labelledby="modalPassLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPassLabel"><span class="text-info">|</span> Edit Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <form action="/edit-password-admin" method="post">
                    @csrf
                        <div class="form-group">   
                            <input type="hidden" name="id" id="id" value="{{ auth()->user()->id }}">  

                            <label for="password_lama" class="small">Password Lama</label>
                            <input type="password" class="form-control mb-2 @error('password_lama') is-invalid @enderror" name="password_lama" id="password_lama" required>
                            @error('password_lama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="password_baru" class="small">Password Baru</label>
                            <input type="password" class="form-control mb-2 @error('password_baru') is-invalid @enderror" name="password_baru" id="password_baru" required>
                            @error('password_baru')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="konfirmasi_password_baru" class="small">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control mb-2 @error('konfirmasi_password_baru') is-invalid @enderror" name="konfirmasi_password_baru" id="konfirmasi_password_baru" required>
                            @error('konfirmasi_password_baru')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            
                            <div class="modal-footer mt-3"></div>
                            <button type="submit" class="btn btn-info btn-block"><i class="fas fa-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Edit Profile -->
    <div class="modal fade" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="modalProfileLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalProfileLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <form action="/edit-profile-admin" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">   
                        <input type="hidden" name="id" id="id" value="{{ auth()->user()->id }}">  

                        <label for="email" class="small">Email</label>
                        <input type="email" class="form-control mb-2" name="email" id="email" value="{{ auth()->user()->email }}" required readonly>

                        <label for="username" class="small">Username</label>
                        <input type="text" class="form-control mb-2" id="username" name="username" placeholder="Username" required value="{{ auth()->user()->username }}">
                        @error('username')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                        <label for="image" class="small">Foto</label>
                        <div class="custom-file mt-0">
                            <input type="file" class="custom-file-input mb-2" name="image" id="image" onchange="previewImg()">
                            <label class="custom-file-label" for="image">Pilih Foto</label>
                            <img class="img-thumbnail img-preview mt-2 mb-2" src="{{ asset('storage/' . auth()->user()->image) }}" width="200px"></img>
                            @error('image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            
                            <div class="modal-footer mt-2"></div>
                            <button type="submit" class="btn btn-info btn-block"><i class="fas fa-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script>
        function previewImg() {
        const sampul = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
            }
        }
        
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });

        $(document).ready(function() {
            $('#dataTable').DataTable();
            $('#dataTable1').DataTable();
            $('#dataTable2').DataTable();
        } );

    </script>
    </body>
</html>