@if(Auth::user()->roles[0]->name = "Masyarakat")
    @extends('layouts.user')

@else
    @extends('layouts.app')
@endif


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            .col-sm-
        </div>
    </div>
@endsection