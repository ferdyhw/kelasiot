@extends('layouts/template-admin')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List Comments</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Comments</li>
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
            <div class="flash-data-comment" data-flashdatacomment="{{ Session::get('sukses'); }}"></div>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>List All Comments</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-md" id="dataTable" width="100%" cellspacing="0">
                                    <thead style="text-align: center;">
                                        <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                            <th>Comment at</th>
                                            <th>Created at</th>
                                            <th>!</th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center;">
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($comments as $comment)
                                            <tr class="">
                                                <th>{{ $i++; }}</th>
                                                <td>{{ $comment->user_id }}</td>
                                                <td>
                                                    <p class="badge badge-secondary">Default</p>
                                                </td>
                                                <td>{{ date('d-m-Y', strtotime($comment->created_at)) }}</td>
                                                <td>
                                                    <button class="btn btn-info" data-toggle="modal" data-target="#detailModal{{ $comment->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $comment->id }}">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                        </div>
                    </div>
                </div>   
            </div>                        
        </main>

        @foreach ($comments as $comment)
            <div class="modal fade" id="detailModal{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Data Comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <label for="comment" style="text-decoration: underline">Comment</label>
                        <p id="comment">{{ $comment->comment }}</p>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

        @foreach ($comments as $comment)
        <div class="modal fade" id="deleteModal{{ $comment->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Data Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/delete-comment" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $comment->id }}">
                        <p>
                            Yakin ingin menghapus data comment dengan ID {{ $comment->id }} ?
                        </p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
                <button type="submit" class="btn btn-danger"><i class="fas fa-check"></i> Delete</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    @endforeach

@endsection