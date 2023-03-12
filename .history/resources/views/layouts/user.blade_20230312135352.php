<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporkuy</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{asset('css/mycss.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/icon-small.png')}}">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(isset($transparent))
    @if($transparent==false)
    <style>
        h4,
        h5,
        h6,
        h3,
        h2,
        h1,
            {
            color: #6e21cc !important;
        }

        p {
            color: grey;
        }

        .wave {
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 300px;
            background-image: url("{{asset('img/wave.svg')}}");
            position: fixed;
        }

        .wave.wave1 {
            animation-name: animate1;
            animation-duration: 30s;
            -webkit-animation-iteration-count: infinite;
            z-index: 1000;
            opacity: 1;
            animation-delay: .3s;
        }

        .wave.wave2 {
            animation-name: animate2;
            animation-duration: 30s;
            animation-iteration-count: infinite;

            z-index: 999;
            opacity: 0.75;
            animation-delay: .3s;
            bottom: 30px;
        }

        .wave.wave3 {
            animation-name: animate3;
            animation-duration: 30s;

            z-index: 998;
            opacity: 0.5;
            animation-delay: .3s;
        }

        @keyframes animate1 {
            0% {
                background-position-x: 0px;
            }

            100% {
                background-position-x: 800px;

            }
        }

        @keyframes animate2 {
            0% {
                background-position-x: 0px;
            }

            100% {
                background-position-x: -2000px;

            }
        }

        @keyframes animate3 {
            0% {
                background-position-x: 0px;
            }

            100% {
                background-position-x: 3000px;
            }
        }

        body {

            background-color: #7703fc;
        }



        .container-pengaduan {
            margin-top: 40px;
            box-shadow: 0px 0px 10px -5px black;
            z-index: 1001;
            border-radius: 30px;
        }




        label {
            color: #6e21cc;
        }

        .nav-link {
            color: #6e21cc;
        }

    </style>
    @endif
    @endif
    @stack("css")
    <title>@yield("title")</title>
</head>
<body>
    @if(isset($transparent))
    @if($transparent==false)
    <div class="wave wave1">
    </div>
    <div class="wave wave2">
    </div>
    <div class="wave wave3">
    </div>
    @endif
    @endif
    <!-- Navbar -->
   
    <!-- Navbar -->

    <div class="container-fluid p-0">
        @yield("content")
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
    <script src="{{asset('plugins/popper/popper.js')}}"></script>
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
    <script src="{{asset('js/laporkuy/pengaduan.js')}}"></script>
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
              if(data.length < 1){
                $(".dd-notif-span").hide()
                $(".dd-notif-header").text("Belum ada Notifikasi")
              }
              $(".dd-notif-span").text(data.length)

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
