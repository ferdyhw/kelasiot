<nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #212529; border-bottom: 3px solid #17a2b8">
    <a class="navbar-brand" href="/welcome"><img class="container-fluid" src="{{ asset('image/logo.png') }}"/></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>

    {{-- Navbar --}}
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <button class="btn dropdown-item" data-toggle="modal" data-target="#modalProfile">Profile</button>
                <button class="btn dropdown-item" data-toggle="modal" data-target="#modalPass">Password</button>
                <div class="dropdown-divider"></div>
                    <button class="btn dropdown-item" data-toggle="modal" data-target="#modalLogout">Logout</button>
            </div>
        </li>
    </ul>

</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    {{-- Menu Core --}}
                    <div class="sb-sidenav-menu-heading"><span class="text-secondary">CORE</span></div>
                    <a class="nav-link" href="/dashboard-admin">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
                    </a>

                    {{-- Menu CRUD --}}
                    <div class="sb-sidenav-menu-heading"><span class="text-secondary">CRUD</span></div>
                    @if (auth()->user()->role_id == 1)
                    <a class="nav-link collapsed" type="button" data-toggle="collapse" data-target="#collapseAdmins" aria-expanded="false" aria-controls="collapseAdmins">
                        <div class="sb-nav-link-icon"><i class="fas fa-users-cog"></i></div>Admins
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseAdmins" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/admin-active">Active</a>
                            <a class="nav-link" href="/admin-nonactive">Non-active</a>
                        </nav>
                    </div>                        
                    @endif

                    <a class="nav-link collapsed" type="button" data-toggle="collapse" data-target="#collapseMembers" aria-expanded="false" aria-controls="collapseMembers">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>Members
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseMembers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/member-active">Active</a>
                            <a class="nav-link" href="/member-nonactive">Non-active</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" type="button" data-toggle="collapse" data-target="#collapsePage" aria-expanded="false" aria-controls="collapsePage">
                        <div class="sb-nav-link-icon"><i class="fas fa-scroll"></i></div>Features
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePage" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/basic">Basic</a>
                            <a class="nav-link" href="/project">Project</a>
                            <a class="nav-link" href="/quiz">Quiz</a>
                            <a class="nav-link" href="/component">Component</a>
                        </nav>
                    </div>

                    @if (auth()->user()->role_id == 1)
                        <a class="nav-link" href="/comment"><div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>Comments</a>
                    @endif

                    {{-- Menu OTHER --}}
                    <div class="sb-sidenav-menu-heading"><span class="text-secondary">OTHER</span></div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprofile" aria-expanded="false" aria-controls="collapseprofile">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>Account
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                    <div class="collapse" id="collapseprofile" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link" type="button" data-toggle="modal" data-target="#modalProfile">Profile</a>
                             <a class="nav-link" type="button" data-toggle="modal" data-target="#modalPass">Password</a>                                     
                        </nav>
                    </div>
                     <a class="nav-link" type="button" data-toggle="modal" data-target="#modalLogout"><div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i>
                    </div>Logout</a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ $role->name }}
            </div>
        </nav>
    </div>