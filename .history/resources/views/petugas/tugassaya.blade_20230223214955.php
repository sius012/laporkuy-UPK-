@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="col">
                <div class="card">
                @foreach($ps as $j => $pss)
                    
                @endforeach
                
            </div>
            
        @endforeach
    </div>
</div>
@endsection