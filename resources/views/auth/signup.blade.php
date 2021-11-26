@extends('layouts.template-auth')
@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 mt-5 pt-3">
                        <div class="card shadow-lg border-0 rounded-lg">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4"><b>SIGNUP</b></h3></div>
                            <div class="card-body pb-0">                                        
                                <form method="post" action="/proses-signup">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="small mb-1" for="username">Username</label><input class="form-control py-4 @error('username') is-invalid @enderror" id="username" name="username" type="text" value="{{ old('username') }}" placeholder="Masukan Username" autocomplete="off" autofocus required />
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="small mb-1" for="email">Email</label><input class="form-control py-4 @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Masukan Email" autocomplete="off" required />
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="small mb-1" for="password">Password</label><input class="form-control py-4 @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Masukan Password" required />
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"><label class="small mb-1" for="password_confirm">Konfirmasi Password</label><input class="form-control py-4 @error('password_confirm') is-invalid @enderror" id="password_confirm" name="password_confirm" type="password" placeholder="Masukan Konfirmasi Password" required />
                                            @error('password_confirm')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>                                                
                                    </div>
                                    <div class="form-group"><button class="btn btn-primary btn-block mb-2" type="submit" name="signup">SignUp</button>
                                    <center><span style="font-size: 14px">Sudah punya akun?</span><a href="/login" class="small"> Login</a></center>
                                    </div>
                                </form>
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