@if(Auth::user()->roles[0]->name = "Masyarakat")
    @extends('layouts.user')

@else
    @extends('layouts.app')
@endif


@section('content')
    <div class="container">
        <div class="row">
            .col
        </div>
    </div>
@endsection