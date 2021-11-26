<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{ asset('image/logo.png') }}" alt="" /></a>
        <button style="background-color: #117a8b00" class="btn btn-link navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars fa-lg"></i>                
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Basic</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Quiz</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Project</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Component</a></li>
                @if(auth()->user()->role_id <= 2)
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="dashboard-admin">Dashboard</a></li>
                @endif
            </ul>
            <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Password</a>
                <div class="dropdown-divider"></div>
                <button class="btn dropdown-item" data-toggle="modal" data-target="#exampleModal">Logout</button>
            </div>
        </li>
    </ul>
        </div>
    </div>
</nav>