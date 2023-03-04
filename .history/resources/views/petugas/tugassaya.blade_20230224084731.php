@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <h3>Tugas Saya</h3>
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="col">
                <div class="card p-3" style="height: 90vh">
                    <label>{{ucwords   ($i)}}</label>
                @foreach($ps as $j => $pss)
        
                        <div class="card m-1 btn-info-laporan" data-bs-toggle="modal" data-bs-target="#modal-laporan"  value="{{$pss->id_pengaduan}}" uri="{{url('getsinglepengaduan')}}">
                            <div class="row">
                                <div class="col-4"><img src="{{$pss->lampiran[0]->isi_lampiran}}" alt="" width="80px" height="80"></div>
                                <div class="col-8">
                                    <label>{{$pss->judul_pengaduan}}</label>
                                    <p class="p-0" style="line-height: 0">{{Laporkuy::trunc($pss->keterangan,10)}}</p> 
                                    <small>{{$pss->tanggal}}</small>
                                </div>
                            </div>
                        </div> 
                @endforeach
                </div>
            </div>
            
        @endforeach
    </div>
</div>

<div class="modal fade" id="modal-selesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


@push("js")
    <script src="{{asset('js/laporkuy/pengaduan.js')}}"></script>
    <script>
        $(document)
    </script>
@endpush


@include("components.laporkuy.modallaporaninfo")
@endsection