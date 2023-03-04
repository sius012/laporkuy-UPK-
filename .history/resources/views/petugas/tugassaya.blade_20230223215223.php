@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="col">
                <div class="card">
                @foreach($ps as $j => $pss)

                        <div class="card">
                            <div class="row">
                                <div class="col-4"></div>
                            </div>
                        </div>
                @endforeach
                </div>
            </div>
            
        @endforeach
    </div>
</div>
@endsection