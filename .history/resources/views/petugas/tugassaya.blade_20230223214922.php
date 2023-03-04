@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="col">
                @foreach($ps[""] as $key => $value)
                    
                @endforeach
                <div class="card"></div>
            </div>
            
        @endforeach
    </div>
</div>
@endsection