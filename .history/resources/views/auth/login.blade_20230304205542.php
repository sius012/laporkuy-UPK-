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
            border-radius: 50px;
            /*1*/
            border: 2px solid transparent;
            /*2*/
            background: linear-gradient(45deg, #6B2FEB 1.32%, #5E1A88 107.67%) border-box;
            /*3*/
            -webkit-mask:
                /*4*/
                linear-gradient(#fff 0 0) padding-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            /*5'*/
            mask-composite: exclude;
            /*5*/

            height: 60px;

            
        }

        .card-auth{
                padding: 30px !important;
            }

    </style>
</head>
<body class="bg-auth">
    <div class="container">
        <div class="card card-auth p-3" style="margin-top: 10%">
            <div class="row">
                <div class="col-md">
                    <img src="{{asset('img/')}}" alt="">
                </div>
                <div class="col-md">
                    <div class="container">
                        <h4>Daftar</h4>
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
