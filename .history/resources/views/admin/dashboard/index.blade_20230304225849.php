@section("title", "Dashboard")
@section("icon", "fas fa-dashboard")
@extends("layouts.app")

@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3 class="pengaduan-masuk"></h3>

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
                    <h3 class="pengaduan-diproses">53</h3>

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
                    <h3 pengaduan-diproses>53</h3>

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
                console.log(data.chart);

                var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: data.chart.jenis_pengaduan,
				datasets: [{
					label: '# of Votes',
					data: data.chart.jml_pengaduan,
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 3
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
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