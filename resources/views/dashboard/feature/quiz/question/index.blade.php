@extends('layouts/template-admin')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">List All Question Quiz ID {{ $quiz->id }}</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="/dashboard-admin">Dashboard</a></li>
                    <li class="breadcrumb-item active">Features</li>
                    <li class="breadcrumb-item"><a href="/quiz">Quiz</a></li>
                    <li class="breadcrumb-item active">Question</li>
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

                <div class="flash-data-17" data-flashdata17="{{ Session::get('insert'); }}"></div>
                <div class="flash-data-18" data-flashdata18="{{ Session::get('update'); }}"></div>
                <div class="flash-data-19" data-flashdata19="{{ Session::get('delete'); }}"></div>

                <div class="row mb-4">
                    <div class="col-7">
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#insertModal"><i class="fas fa-plus"></i> Tambah Data Question</button>
                    </div>
                    {{-- <div class="col-5">
                        <form action="/quiz" method="GET">
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
                    <div class="card-header"><i class="fas fa-table mr-1"></i>Table List All Question Quiz ID {{ $quiz->id }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-md" id="dataTable" width="100%" cellspacing="0">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>#</th>
                                        <th>Quiz ID</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>!</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($questions as $value)
                                        <tr class="">
                                            <th>{{ $i++; }}</th>
                                            <td>{{ $value->quiz_id }}</td>
                                            <td>
                                                <span class="badge badge-success">@if($value->status == 'true') Active @endif</span>    
                                                <span class="badge badge-danger">@if($value->status == 'false') Non-active @endif</span>    
                                            </td>
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
                <h5 class="modal-title" id="insertModalLabel">Tambah Data Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="/insert-question/{{ $quiz->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="quiz_id" id="quiz_id" value="{{ $quiz->id }}">

                    <label for="question" class="large">Question</label>
                    <textarea class="ckeditor @error('question') is-invalid @enderror" id="ckedtor" name="question" placeholder="Masukan question" required rows="10">
                    </textarea>
                    @error('question')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="option_a" class="large mt-2">Option A</label>
                    <textarea class="ckeditor @error('option_a') is-invalid @enderror" id="ckedtor" name="option_a" placeholder="Masukan option_a" required rows="10">
                    </textarea>
                    @error('option_a')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="option_b" class="large mt-2">Option B</label>
                    <textarea class="ckeditor @error('option_b') is-invalid @enderror" id="ckedtor" name="option_b" placeholder="Masukan option_b" required rows="10">
                    </textarea>
                    @error('option_b')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="option_c" class="large mt-2">Option C</label>
                    <textarea class="ckeditor @error('option_c') is-invalid @enderror" id="ckedtor" name="option_c" placeholder="Masukan option_c" required rows="10">
                    </textarea>
                    @error('option_c')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="option_d" class="large mt-2">Option D</label>
                    <textarea class="ckeditor @error('option_d') is-invalid @enderror" id="ckedtor" name="option_d" placeholder="Masukan option_d" required rows="10">
                    </textarea>
                    @error('option_d')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="answer" class="large mt-2">Answer</label>
                    <select class="form-control @error('answer') is-invalid @enderror" name="answer" id="answer">
                        <option selected value="<?php null ?>">--Pilih--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                    @error('answer')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="status" class="large mt-2">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                        <option selected value="<?php null ?>">--Pilih--</option>
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
                        <label class="custom-file-label" for="image">Pilih Image</label>
                    </div>
                        <img class="img-thumbnail img-preview1 mt-2" src="{{ asset('storage/img-feature/quiz/default-thumbnail.jpg') }}">
                    @error('image')
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

        @foreach ($questions as $value)
        <div class="modal fade" id="updateModal{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Tambah Data Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="/update-question/{{ $quiz->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{ $value->id }}">
                    <input type="hidden" name="quiz_id" id="quiz_id" value="{{ $quiz->id }}">

                    <label for="question" class="large">Question</label>
                    <textarea class="ckeditor @error('question') is-invalid @enderror" id="ckedtor" name="question" placeholder="Masukan question" required rows="10">
                        {{ $value->question }}
                    </textarea>
                    @error('question')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="option_a" class="large mt-2">Option A</label>
                    <textarea class="ckeditor @error('option_a') is-invalid @enderror" id="ckedtor" name="option_a" placeholder="Masukan option_a" required rows="10">
                        {{ $value->option_a }}
                    </textarea>
                    @error('option_a')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="option_b" class="large mt-2">Option B</label>
                    <textarea class="ckeditor @error('option_b') is-invalid @enderror" id="ckedtor" name="option_b" placeholder="Masukan option_b" required rows="10">
                        {{ $value->option_b }}
                    </textarea>
                    @error('option_b')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="option_c" class="large mt-2">Option C</label>
                    <textarea class="ckeditor @error('option_c') is-invalid @enderror" id="ckedtor" name="option_c" placeholder="Masukan option_c" required rows="10">
                        {{ $value->option_c }}
                    </textarea>
                    @error('option_c')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="option_d" class="large mt-2">Option D</label>
                    <textarea class="ckeditor @error('option_d') is-invalid @enderror" id="ckedtor" name="option_d" placeholder="Masukan option_d" required rows="10">
                        {{ $value->option_d }}
                    </textarea>
                    @error('option_d')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="answer" class="large mt-2">Answer</label>
                    <select class="form-control @error('answer') is-invalid @enderror" name="answer" id="answer">
                        <option selected value="<?php null ?>">--Pilih--</option>
                        <option value="A" {{ ($value->answer == 'A') ? 'selected' : '' }}>A</option>
                        <option value="B" {{ ($value->answer == 'B') ? 'selected' : '' }}>B</option>
                        <option value="C" {{ ($value->answer == 'C') ? 'selected' : '' }}>C</option>
                        <option value="D" {{ ($value->answer == 'D') ? 'selected' : '' }}>D</option>
                    </select>
                    @error('answer')
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

                    <label for="image2" class="large mt-2">Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input mb-2" name="image" id="image2" onchange="previewImg2()">
                        <label class="custom-file-label" for="image">Pilih Image</label>
                    </div>
                    @if ($value->image != NULL)
                        <img class="img-thumbnail img-preview2 mt-2" src="{{ asset('storage/' . $value->image) }}">
                    @else
                        <img class="img-thumbnail img-preview2 mt-2" src="{{ asset('storage/img-feature/quiz/default-thumbnail.jpg') }}">
                    @endif
                    @error('image')
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

        @foreach ($questions as $value)
        <div class="modal fade" id="deleteModal{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Data Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form action="/delete-question/{{ $quiz->id }}" method="post">
                    @csrf
                    <input type="hidden" readonly id="id" name="id" value="{{ $value->id }}">
                    <p>
                        Yakin ingin menghapus data basic dengan ID {{ $value->id }} ?
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
        </script>

@endsection