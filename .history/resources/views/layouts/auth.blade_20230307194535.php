<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .bg-auth {
            background: linear-gradient(90deg, #6B2FEB 1.32%, #5E1A88 107.67%);
        }

        .card {
            background: white;
            border-radius: 10px;
        }

        .form-control-auth {
            width: 100%;
            background: #ffffff;
            border: 4px solid #6246D1;
            padding: 15px;
            border-radius: 30px;
            box-shadow: 0px 5px 10px -8px black;

        }

        .card-auth {
            padding: 20px !important;
            border-radius: 30px;
            min-height: 40rem;
        }

        .form-group label {
            color: #7F0FD8;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .heading-auth {
            font-weight: bold !important;
            color: #7F0FD8;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .btn-submit {
            height: 1.5cm;
            width: 100%;
            background: linear-gradient(88.49deg, #7F0FD8 16.21%, #5834BF 88.24%);
            box-shadow: 0px 3.60039px 14.4016px rgba(0, 0, 0, 0.25);
            border-radius: 27.903px;
            color: white;
        }

        .text-auth {
            padding-top: 40px;
            width: 80%;
            font-weight: bold;
            color: #7108C3;
        }

    </style>
</head>
<body class="bg-auth">
    <div class="container">
        <div class="card card-auth p-3" style="margin-top: 5%">
            <div class="row">
                <div class="col-md">
                    <img src="{{asset('img/laporkuy-icon.png')}}" alt="" class="mb-5">

                    <div class="container d-flex">
                        <img class="m-auto" src="{{asset('img/auth-ilustration.png')}}" alt="">

                    </div>
                    <p class="text-center text-auth m-auto"> Buat Laporan Pengaduan dengan
                        Aman, Nyaman, dan Mudah</p>

                </div>
                <div class="col-md">
                    <div class="container my-auto">
                        <h4 class="heading-auth">@yield('heading-auth')</h4>
                        @yield("content")

                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
