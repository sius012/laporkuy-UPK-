@if(Auth::user()->roles[0]->name = "Masyarakat")
    @extends('layouts.user')

@else
    @extends('layouts.app')
@endif


@section('content')
    
@endsection