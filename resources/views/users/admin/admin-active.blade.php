@extends('layouts/template-admin')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">List Admin Active</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/dashboard-admin">Dashboard</a></li>
                    <li class="breadcrumb-item active">Admins</li>
                    <li class="breadcrumb-item active">Active</li>
                </ol>
                {{-- @if ($pesan = Session::get('status'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-info-circle"></i> <strong>{{ $pesan }}</strong>
                            </div>  
                        </div>
                    </div>
                @endif --}}
                <div class="flash-data-1" data-flashdata1="{{ Session::get('status'); }}"></div>
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Table List Admin Active</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Email</th>                                                
                                        <th>Profile</th>
                                        <th>Role</th>
                                        <th>Updated at</th>
                                        <th>!</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($users as $user)
                                        <tr class="">
                                            <th>{{ $i++; }}</th>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>                                                
                                            <td>
                                                <a href="{{ asset('storage/' . $user->image) }}" target="_blank">
                                                    <img class="img-thumbnail" style="max-width: 50px" src="{{ asset('storage/' . $user->image) }}" />
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-secondary">Admin</span>
                                            </td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $user->id }}" title="Ban {{ $user->username }}"><i class="fas fa-times-circle"></i> Non-active</button></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        @foreach ($users as $user)
            <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Non-active</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form action="/proses-nonactive" method="post">
                        @csrf
                        <input type="hidden" readonly id="id" name="id" value="{{ $user->id }}">
                        <input type="hidden" readonly id="role_id" name="role_id" value="{{ $user->role_id }}">
                        <p>Yakin Ingin <b class="text-danger">Non-active</b> kan Akun :</p>                   
                        Username<input class="form-control mt-2 mb-2 bg-light" readonly type="text" id="username" name="username" value="{{ $user->username }}">
                        @error('username') @enderror
                        Email<input class="form-control mt-2 mb-4 bg-light" readonly type="text" id="email" name="email" value="{{ $user->email }}">
                        @error('email') @enderror
                        <input type="hidden" id="status" name="status" value="false">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                    <button type="submit" class="btn btn-info"><i class="fas fa-check"></i> Yakin</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        @endforeach


@endsection