@section("title", "Dashboard")
@section("icon", "fas fa-dashboard")
@extends("layouts.app")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-document"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col">
            <div class="small-box bg-danger ">
                <div class="inner">
                    <h3>100</h3>

                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="ion ion-document"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <div class="card p-3">
                <h4><i class="ion ion-stats-bars fs-2 mr-2"></i> Statistik Laporan Masuk</h4>
                 <canvas id="myChart"></canvas>
            </div>
        
        </div>
    </div>
</div>


@push("js")
<script>
    $(document).ready(function(){
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr('content')
            },
            type: "get",
            url: "{{route('dashboard.getdata')}}",
            dataType: 'json',
            success: function(data){
                console.log(data);
            },error: function(err){
                alert(err.responseText);
            }
        })



        
    });
		
	</script>

@endpush
@endsection

@push("js")
    <script></script>

@endpush