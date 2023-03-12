<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>

    <!-- More -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    <link rel="shortcut icon" href="{{asset('img/icon-small.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield("title")</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/mycss.css')}}" rel="stylesheet">

    <!-- Scripts -->


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('sweetalert::alert')
    <input type="hidden" value="{{Auth::user()->id}}" name="id-user">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-lk ">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Selamat datang di Laporkuy! <b>{{Auth::user()->name}}</b></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right ">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Tandai telah dibaca</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge dd-notif-span"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right dd-notif" style="z-index: 10000 !important">
                        <span class="dropdown-item dropdown-header dd-notif-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <div class="dd-notif-cont">

                        </div>
                      
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer btn-dibaca">Tandai telah dibaca</a>
                    </div>
                </li>
               
                <li class="nav-link">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex  justify-content-end">
                        <li class="nav-item">
                            <div class="dropdown">
                              
                                <a style="color: #5112d0;" href=""  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
            


                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fas fa-user m-2"></i>Pengaturan Akun</a>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button class="btn btn-danger btn-sm m-2"> <i class="fa fa-exit"></i>
                                            Keluar</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light elevation-4">
            <!-- Brand Logo -->
            <div class="container-fluid">
                <img src="{{asset('img/laporkuy-icon.png')}}" alt="" class="m-1 brand-lk">
            </div>


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        @foreach(Laporkuy::renderNav() as $rs)
                        @php
                        $visibility = explode("|", $rs['visibility']);
                        @endphp
                        @if(in_array(Auth::user()->roles[0]->name, $visibility))
                        <li class="nav-item">
                            <a href="{{$rs['url']}}"
                                class="nav-link nav-link-lk @if(url()->current() == $rs['url']) active @endif">
                                <i class="nav-icon {{$rs['icon']}}"></i>
                                {{$rs["nama_menu"]}}
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3 class="text-title"><i class="@yield('icon') m-2"></i>@yield('title')</h3>
                        </div>
                        <div class="col-sm-6">
                            <h3></h3>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield("content")
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Dionisius Setya Hermawan</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>


    <!-- script -->
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->

    <!-- Sparkline -->
    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('js/pages/dashboard.js')}}"></script>
    <script src="{{asset('js/laporkuy/laporan.js')}}"></script>
    <script src="{{asset('js/laporkuy/status.js')}}"></script>
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.3/datatables.min.css" />

    <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.3/datatables.min.js"></script>
    @if(Auth::check())
    <script>
        $(document).ready(function(){
          $.ajax({
            headers: {
              "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
            },
            url: "/getnotifications",
            type: "get",
            dataType: "json",
            success: function(data){
                // if(data.length < 1){
       
                //   $(".dd-notif-header").text("Belum ada Notifikasi")
                // }

                // $(".dd-notif-span").text(data.length)
  
                let notif = data.map(function(e){
                  return `<a href="#" class="dropdown-item">
                                  <i class=" ${renderIcon(e['judul'])}"></i> ${e["judul"]}
                                  <span class="float-right text-muted text-sm">${getTimeDifference(e["created_at"])}</span>
                                  <p>${e['isi']}</p>
                              </a>`;
                })
  
                $(".dd-notif-cont").html(notif);
            },
            error: function(err){
              alert("err.responseText");
            }
          })
        });
      </script>
      @endif
    @stack("js")
</body>

</html>