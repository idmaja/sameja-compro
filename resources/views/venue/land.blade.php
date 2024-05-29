<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - Sameja </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/favicon.png" />
</head>
<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="index.html">
                        <img src="./assets/Logo.png" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="./assets/Logo.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                        <div class="me-3">
                            <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                                data-bs-toggle="minimize">
                                <span class="icon-menu"></span>
                            </button>
                        </div>
                        <div>
                            <a class="navbar-brand brand-logo" href="index.html">
                                <img src="images/logo.svg" alt="logo" />
                            </a>
                            <a class="navbar-brand brand-logo-mini" href="index.html">
                                <img src="images/logo-mini.svg" alt="logo" />
                            </a>
                        </div>
                    </div>
                    <div class="navbar-menu-wrapper d-flex align-items-top">
                        <ul class="navbar-nav">
                            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                                @foreach ($user as $u)
                                    <h1 class="welcome-text">Good Morning, <span
                                            class="text-black fw-bold">{{ $u->username }}</span>
                                    </h1>
                                @endforeach
                                <h3 class="welcome-sub-text">Welcome to your dashboard!</h3>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link count-indicator" id="Logout" href="{{ route('auth.logout') }}"
                                    aria-expanded="false">
                                    <i class="mdi mdi-logout"></i>
                                </a>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-bs-toggle="offcanvas">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </nav>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div id="right-sidebar" class="settings-panel">
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section"
                            role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('dashboard') }}" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-apps"></i>
                            <span class="menu-title">Dashboard</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="collapse" href="#menu" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-food"></i>
                            <span class="menu-title">Menu</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('menu.land') }}">Daftar
                                        Menu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('menu.create') }}">Tambah
                                        Menu</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="collapse" href="#promo" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-floor-plan"></i>
                            <span class="menu-title">Promo</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="promo">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('promo.land') }}">Daftar
                                        Promo</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('promo.create') }}">Tambah
                                        Promo</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-bs-toggle="collapse" href="#galeri" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon mdi mdi-camera"></i>
                            <span class="menu-title">Galeri</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="galeri">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item active"> <a class="nav-link"
                                        href="{{ route('venue.land') }}">Daftar
                                        Galeri</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('venue.create') }}">Tambah
                                        Galeri</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">List</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama Venue</th>
                                                    <th>Foto</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($venue as $v)
                                                    <tr>
                                                        <td>{{ $v->id }}</td>
                                                        <td>{{ $v->name }}</td>
                                                        <td><img src="{{ asset('img-venue/' . $v->image) }}"
                                                                width="100"></td>
                                                        <td><a href="{{ route('venue.edit', $v->id) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <a href="{{ route('venue.delete', $v->id) }}"
                                                                class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Sameja</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All
                            rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/vendors/chart.js/Chart.min.js"></script>
    <script src="/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
