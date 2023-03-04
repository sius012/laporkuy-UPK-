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
            <div class="col-sm-8">
                <div class="form-group"></div>
            </div>
        </div>
    </div>
@endsection