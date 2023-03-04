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
           height: 1.5cm;
           border-radius: 30px;
           box-shadow: 0px 5px 10px -8px black;
            
        }

        .card-auth{
                padding: 30px !important;
            }

        .form-group label{
            color: #7F0FD8;
            font-weight: bold;
            
        }

        .heading-auth{
            font-weight: bold !important;
            color:#7F0FD8;
            margin-bottom: 20px;
        }

    </style>
</head>
<body class="bg-auth">
    <div class="container">
        <div class="card card-auth p-3" style="margin-top: 10%">
            <div class="row">
                <div class="col-md">
                    <img src="{{asset('img/laporkuy-icon.png')}}" alt="">
                </div>
                <div class="col-md">
                    <div class="container">
                        <h4 class="heading-auth">Ayo Daftar</h4>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control-auth">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control-auth">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control-auth">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control-auth">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>
