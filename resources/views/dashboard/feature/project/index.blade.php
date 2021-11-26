@extends('layouts/template-admin')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">List All Data Project</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="dashboard-admin">Dashboard</a></li>
                    <li class="breadcrumb-item active">Features</li>
                    <li class="breadcrumb-item active">Project</li>
                </ol>
                {{-- @if ($pesan = Session::get('insert'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-info-circle"></i> <strong>{{ $pesan }}</strong>
                            </div>  
                        </div>
                    </div>
                @endif
                @if ($pesan = Session::get('update'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-info-circle"></i> <strong>{{ $pesan }}</strong>
                            </div>  
                        </div>
                    </div>
                @endif
                @if ($pesan = Session::get('delete'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-info-circle"></i> <strong>{{ $pesan }}</strong>
                            </div>  
                        </div>
                    </div>
                @endif --}}

                <div class="flash-data-8" data-flashdata8="{{ Session::get('insert'); }}"></div>
                <div class="flash-data-9" data-flashdata9="{{ Session::get('update'); }}"></div>
                <div class="flash-data-10" data-flashdata10="{{ Session::get('delete'); }}"></div>

                <div class="row mb-4">
                    <div class="col-7">
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#insertModal"><i class="fas fa-plus"></i> Tambah Data Project</button>
                        <a href="/project/active" style="text-decoration: none">
                            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#"><i class="fas fa-check-circle"></i> Active</button>
                        </a>
                        <a href="/project/non-active" style="text-decoration: none">
                            <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#"><i class="fas fa-times-circle"></i> Non-active</button>
                        </a>
                    </div>
                    {{-- <div class="col-5">
                        <form action="/project" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukan keyword pencaraian..." name="search" id="search" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="form-control btn btn-info" type="submit" id="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>

                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Table List All Data Project</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-md" id="dataTable" width="100%" cellspacing="0">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Cover</th> 
                                        <th>Status</th>                                               
                                        <th>Author</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>!</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($project as $value)
                                        <tr class="">
                                            <th>{{ $i++; }}</th>
                                            <td>{{ $value->title }}</td>
                                            <td>
                                                <a target="_blank" href="{{ asset('storage/' . $value->cover) }}">
                                                    <img class="img-thumbnail" style="max-width: 200px" src="{{ asset('storage/' . $value->cover) }}" />
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">@if($value->status == 'true') Active @endif</span>    
                                                <span class="badge badge-danger">@if($value->status == 'false') Non-active @endif</span>    
                                            </td> 
                                            <td>{{ $value->author }}</td>
                                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                            <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                            <td>
                                                <button class="btn btn-warning" data-toggle="modal" data-target="#updateModal{{ $value->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $value->id }}">
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

        <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Tambah Data Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="/insert-project" method="post" enctype="multipart/form-data">
                    @csrf

                    <label for="title" class="large">Title</label>
                    <input type="text" class="form-control mb-2 @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukan title" required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="content" class="large mt-2">Content</label>
                    <textarea class="ckeditor @error('content') is-invalid @enderror" id="ckedtor" name="content" placeholder="Masukan content" required rows="10">
                    </textarea>
                    @error('content')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="code" class="large mt-2">Code</label>
                    <textarea class="ckeditor @error('code') is-invalid @enderror" id="ckedtor" name="code" placeholder="Masukan code" required rows="10">
                    </textarea>
                    @error('code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="author" class="large mt-2">Author</label>
                    <input type="text" class="form-control mb-2 @error('author') is-invalid @enderror" id="author" name="author" placeholder="Masukan author" required>
                    @error('author')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="status" class="large mt-2">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                        <option selected value="<?php //null ?>">--Pilih--</option>
                        <option value="true">Active</option>
                        <option value="false">Non-active</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="image" class="large mt-2">Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input mb-2" name="image" id="image1" onchange="previewImg1()">
                        <label class="custom-file-label" for="image">Pilih Gambar</label>
                    </div>
                        <img class="img-thumbnail img-preview1 mt-2" src="{{ asset('storage/img-feature/project/default-thumbnail.jpg') }}">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="cover" class="large mt-2">Cover</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input mb-2" name="cover" id="image2" onchange="previewImg2()">
                        <label class="custom-file-label" for="cover">Pilih Cover</label>
                    </div>
                        <img class="img-thumbnail img-preview2 mt-2" src="{{ asset('storage/img-feature/project/default-thumbnail.jpg') }}">
                    @error('cover')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
                <button type="submit" class="btn btn-info"><i class="fas fa-check"></i> Submit</button>
                </form>
                </div>
            </div>
            </div>
        </div>

        @foreach ($project as $value)
            <div class="modal fade" id="updateModal{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Edit Data Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form action="/update-project" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" readonly id="id" name="id" value="{{ $value->id }}">
    
                        <label for="title" class="large">Title</label>
                        <input type="text" class="form-control mb-2 @error('title') is-invalid @enderror" id="title" name="title" placeholder="Masukan title" required value="{{ $value->title }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="content" class="large mt-2">Content</label>
                        <textarea class="ckeditor @error('content') is-invalid @enderror" id="ckedtor" name="content" placeholder="Masukan content" required rows="10">
                            {{ $value->content }}
                        </textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="code" class="large mt-2">Code</label>
                        <textarea class="ckeditor @error('code') is-invalid @enderror" id="ckedtor" name="code" placeholder="Masukan code" required rows="10">
                            {{ $value->code }}
                        </textarea>
                        @error('code')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="author" class="large mt-2">Author</label>
                        <input type="text" class="form-control mb-2 @error('author') is-invalid @enderror" id="author" name="author" placeholder="Masukan author" required value="{{ $value->author }}">
                        @error('author')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="status" class="large mt-2">Status</label>
                        <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                            <option selected value="<?php null ?>">--Pilih--</option>
                            <option value="true" {{ ($value->status == 'true') ? 'selected' : '' }}>Active</option>
                            <option value="false" {{ ($value->status == 'false') ? 'selected' : '' }}>Non-active</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="image" class="large mt-2">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input mb-2" name="image" id="image3" onchange="previewImg3()">
                            <label class="custom-file-label" for="image">Pilih Image</label>
                        </div>
                        @if ($value->image == NULL)
                            <img class="img-thumbnail img-preview3 mt-2" src="{{ asset('storage/img-feature/project/default-thumbnail.jpg') }}">
                        @else
                            <img class="img-thumbnail img-preview3 mt-2" src="{{ asset('storage/' . $value->image) }}">
                        @endif
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="cover" class="large mt-2">Cover</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input mb-2" name="cover" id="image4" onchange="previewImg4()">
                            <label class="custom-file-label" for="cover">Pilih Cover</label>
                        </div>
                            <img class="img-thumbnail img-preview4 mt-2" src="{{ asset('storage/' . $value->cover) }}">
                        @error('cover')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
                    <button type="submit" class="btn btn-info"><i class="fas fa-check"></i> Update</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

        @foreach ($project as $value)
            <div class="modal fade" id="deleteModal{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Data Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form action="/delete-project" method="post">
                        @csrf
                        <input type="hidden" readonly id="id" name="id" value="{{ $value->id }}">
                        <p>
                            Yakin ingin menghapus data project dengan ID {{ $value->id }} ?
                        </p>
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

        <script>
            function previewImg1() {
            const sampul = document.querySelector('#image1');
            const imgPreview = document.querySelector('.img-preview1');

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
                }
            }

            function previewImg2() {
            const sampul = document.querySelector('#image2');
            const imgPreview = document.querySelector('.img-preview2');

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
                }
            }

            function previewImg3() {
            const sampul = document.querySelector('#image3');
            const imgPreview = document.querySelector('.img-preview3');

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
                }
            }

            function previewImg4() {
            const sampul = document.querySelector('#image4');
            const imgPreview = document.querySelector('.img-preview4');

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
                }
            }
        </script>

@endsection