@extends('layouts/template')
@section('content')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang <u>{{ auth()->user()->username }}</u></div>
            @if(auth()->user()->role_id == 1)
                <div class="masthead-heading text-uppercase">Let's Start Building !</div>
                <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="dashboard-admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            @elseif(auth()->user()->role_id == 2)
                <div class="masthead-heading text-uppercase">Let's Start Helping !</div>
                <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="dashboard-admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            @else
                <div class="masthead-heading text-uppercase">Let's Start Learning !</div>
                <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="#">Mulai Sekarang</a>
            @endif
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="fitur">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Fitur<span class="text-info">.</span></h2>  
                <p class="text-muted">Fitur Yang Disediakan Pada Website Ini</p>              
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <hr class="col-md-8">
                    <span class="fa-stack fa-4x">
                        <img class="card-img-top p-1" src="{{ asset('image/img-main/F-1.png') }}">
                    </span>
                    <a href="#basic" class="text-dark"><h4 class="mt-5">Basic</h4></a>
                    <p class="text-muted">Menyediakan pembelajaran dasar mengenai Internet of Things. Mulai dari pengertian iot, sejarah iot, cara kerja iot, hingga unsur-unsur pembentuk internet of things. Materi yang tersedia mudah dipahami oleh pembaca.</p>
                    <hr>
                </div>
                <div class="col-md-12">
                    <span class="fa-stack fa-4x">
                        <img class="card-img-top p-3" src="{{ asset('image/img-main/F-2.png') }}">
                    </span>
                    <a href="#project" class="text-dark"><h4 class="mt-5">Project</h4></a>
                    <p class="text-muted">Menyediakan tutorial dalam menggunakan microcontroller, seperti Arduino UNO. Selain itu, membuat suatu alat Smart Things dengan menggunakan sensor, dimulai dari rangkaiannya sampai sketch programnya.</p>
                    <hr>
                </div>
                <div class="col-md-12">
                    <span class="fa-stack fa-4x">
                        <img class="card-img-top p-3" src="{{ asset('image/img-main/F-3.png') }}">
                    </span>
                    <a href="#quiz" class="text-dark"><h4 class="mt-5">Quiz</h4></a>
                    <p class="text-muted">Menyediakan pertanyan mengenai dasar Internet of Things yang sudah dipelajari sebelumnya. User dapat mengerjakan Quiz berulang-ulang agar dapat mengukur tingkat ingatan dalam mempelajari Internet of Things.</p>
                    <hr>
                </div>
                <div class="col-md-12">
                    <span class="fa-stack fa-4x">
                        <img class="card-img-top p-3" src="{{ asset('image/img-main/F-4.png') }}">
                    </span>
                    <a href="#component" class="text-dark"><h4 class="mt-5">Component</h4></a>
                    <p class="text-muted">Menyediakan informasi mengenai alat-alat yang digunakan dalam membuat sebuah smart things, seperti microcontroler Arduino UNO, NodeMCU dll. Ataupun berbagai jenis sensor seperti DHT11, HCSR04 dll.</p>
                    <hr class="col-md-8">
                </div>                   
            </div>
        </div>
    </section>
@endsection