@extends('layouts.user')


@section('content')
    <div class="container">
        <h3 class='m-3'>Pengaduan Saya</h3>
        <div class="row">
            <div class="card container m-3">
                <div class="card-body">
                    <div id="accordion">
                        @foreach($pengaduan as $i => $pn)
                            <div class="card">
                                <div class="card-header">
                                    Pengaduan
                                </div>
                            </div>
                        @endforeach
                        
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection