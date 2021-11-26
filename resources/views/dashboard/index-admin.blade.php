@extends('layouts/template-admin')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard {{ $role->name }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                {{-- @if ($pesan = Session::get('sukses'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-info-circle"></i> <strong>{{ $pesan }}</strong>
                            </div>  
                        </div>
                    </div>
                @endif --}}
                {{-- @if ($pesan = Session::get('gagal'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-info-circle"></i> <strong>{{ $pesan }}</strong>
                            </div>  
                        </div>
                    </div>
                @endif --}}

                <div class="flash-data-3" data-flashdata3="{{ Session::get('sukses-profile'); }}"></div>
                <div class="flash-data-4" data-flashdata4="{{ Session::get('sukses-password'); }}"></div>
                <div class="flash-data-27" data-flashdata27="{{ Session::get('gagal-password'); }}"></div>

                {{-- <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card text-white mb-4" style="background-color: #3d9970">
                            <div class="card-body">Member Active<h4 class="mb-0">{{ $true_member }}</h4></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/member-active">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="card text-white mb-4" style="background-color: #dd4b39">
                            <div class="card-body">Member Non-active<h4 class="mb-0">{{ $false_member }}</h4></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/member-nonactive">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card text-white mb-4 bg-primary">
                            <div class="card-body">Basic Page<h4 class="mb-0">{{ $sum_basics }}</h4></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/basic">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card text-white mb-4 bg-warning">
                            <div class="card-body">Project Page<h4 class="mb-0">{{ $sum_projects }}</h4></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/project">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card text-white mb-4 bg-success">
                            <div class="card-body">Quiz Page<h4 class="mb-0">{{ $sum_quizs }}</h4></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/quiz">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card text-white mb-4 bg-danger">
                            <div class="card-body">Component Page<h4 class="mb-0">{{ $sum_components }}</h4></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="/component">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                @if (auth()->user()->role_id == 1)
                {{-- Table Admins --}}
                <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>List Admins</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable1" width="100%" cellspacing="0">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Email</th>                                                
                                        <th>Profile</th>
                                        <th>Role</th>                                                
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($admins as $admin)
                                        <tr>
                                            <th>{{ $i++; }}</th>
                                            <td>{{ $admin->username }}</td>
                                            <td>{{ $admin->email }}</td>                                                
                                            <td>
                                                <a href="{{ asset('storage/' . $admin->image) }}" target="_blank">
                                                    <img class="img-thumbnail" style="max-width: 50px" src="{{ asset('storage/' . $admin->image) }}">
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-secondary">Admin</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">@if($admin->status == 'true') Active @endif</span>    
                                                <span class="badge badge-danger">@if($admin->status == 'false') Non-active @endif</span>    
                                            </td>  
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Table Members --}}
                <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>List Members</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable2" width="100%" cellspacing="0">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Email</th>                                                
                                        <th>Profile</th>
                                        <th>Role</th>                                                
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($members as $member)
                                        <tr>
                                            <th>{{ $i++; }}</th>
                                            <td>{{ $member->username }}</td>
                                            <td>{{ $member->email }}</td>                                                
                                            <td>
                                                <a href="{{ asset('storage/' . $member->image) }}" target="_blank">
                                                    <img class="img-thumbnail" style="max-width: 50px" src="{{ asset('storage/' . $member->image) }}">
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-primary">Member</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">@if($member->status == 'true') Active @endif</span>    
                                                <span class="badge badge-danger">@if($member->status == 'false') Non-active @endif</span>    
                                            </td>  
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>                        
        </main>

@endsection