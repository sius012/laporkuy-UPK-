@extends('layouts.app')
@section('title', 'Jenis Pengaduan')
@section('content')
<button class="btn btn-primary-lk" data-toggle="modal" data-target="#tambah-jp">Tambah Jenis </button>
<table class="table table-striped table-light table-bordered my-4">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Pengaduan</th>
            <th>Keterangan</th>
            <th>Laporan Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jenis_pengaduan as $i => $jp)
        <tr>
            <td>{{$i+1}}</td>
            <td>{{$jp->jenis}}</td>
            <td>{{$jp->keterangan}}</td>
            <td>{{$jp->pengaduan()->count()}}</td>
            <td>
                @if($jp->status == "Non-aktif")
                <button class="btn btn-success btn-jp" value="{{$jp->id_jp}}" state='aktif'><i class="fas fa-check">Aktifkan</i></button>
                @else
                <button class="btn btn-warning btn-jp" value="{{$jp->id_jp}}" state="nonaktif"><i class="fas fa-times mr-2"></i>Non-Aktifkan</button>
                @endif

                @if($jp->pengaduan()->count() < 1) <button class="btn btn-danger btn-jp" value="{{$jp->id_jp}}" state="hapus"><i class="fas fa-trash"></i></button>
                    @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="tambah-jp" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Jenis Pengaduan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('jenispengaduan.buat')}}" method="post">
            @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="">Jenis</label>
            <input type="text" class="form-control" name="jenis" >
          </div>
          <div class="form-group">
            <label for="">Keterangan</label>
            <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary-lk">Tambah</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $(".btn-jp").click(function(e) {
            let state = '';
            let id_jp = $(this).val();
            if($(this).attr('state') == 'nonaktif'){
                state = "Mengnon-aktifkan";
            }else if($(this).attr('state')  == 'aktif'){
                state = 'Mengakftikan';
            }else{
                state = "Menghapus";
            }
            Swal.fire({
                title: 'Apakah anda yakin?'
                , text: "apakah anda ingin "+state+" Jenis Pengaduan ini?"
                , icon: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Ya',
                
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $("meta[name=csrf-token]").attr('content')
                        },
                        data: {
                            "id_jp":id_jp,
                            "state": $(this).attr("state")
                        },
                        url: "{{route('jenispengaduan.ubah')}}",
                        type: "put",
                        success: function(response){
                            window.location = "";
                        },error: function(err){
                            alert(err.responseText);
                        }
                    });
                }
            })
        })
    })

</script>
@endpush
