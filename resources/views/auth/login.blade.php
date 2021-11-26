@extends('layouts.template-auth')
@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 mt-3">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4"><b>LOGIN</b></h3></div>
                            <div class="card-body pb-0">
                                {{-- @if ($pesan = Session::get('status'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <i class="fas fa-info-circle"></i> <strong>{{ $pesan }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>  
                                        </div>
                                    </div>
                                @endif
                                @if ($pesan = Session::get('loginError'))
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <i class="fas fa-info-circle"></i> <strong>{{ $pesan }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>  
                                        </div>
                                    </div>
                                 @endif --}}

                                <div class="flash-data-auth1" data-flashdataauth1="{{ Session::get('status'); }}"></div>
                                <div class="flash-data-auth2" data-flashdataauth2="{{ Session::get('loginError'); }}"></div> 

                                <form method="post" action="/proses-login">
                                    @csrf

                                    <div class="form-group"><label class="small mb-1" for="email">Email</label><input class="form-control py-4 @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Masukan Email" autocomplete="off" autofocus required />
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group"><label class="small mb-1" for="password">Password</label><input class="form-control py-4 @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Masukan Password" required />
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-1">
                                    <button class="btn btn-primary btn-block mb-2" type="submit" name="login">Login</button>
                                    </div>
                                </form>
                                <center class="pb-3"><span style="font-size: 14px">Sudah punya akun?</span><a href="/signup" class="small"> Daftar</a></center>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small p-2"><a href="#">Butuh bantuan?</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection