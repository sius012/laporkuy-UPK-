@extends('layouts.user')

@section('content')
    <div class="container card p-3 my-5">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">
                <form>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputPassword" placeholder="Password">
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection