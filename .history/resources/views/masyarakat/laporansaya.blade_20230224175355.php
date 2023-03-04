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
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <i class="fas fa-list"></i> Ada Kebakaran
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div class="card-footer">
  
                              </div>
                            </div>
                          </div>    
                        @endforeach
                        
                        
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection