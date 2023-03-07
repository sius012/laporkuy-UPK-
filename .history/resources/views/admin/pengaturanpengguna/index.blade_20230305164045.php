@extends('layouts.app')
@section('title', 'Pengaturan Pengguna')
@section('icon', 'fa fa-users')

@section("content")
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pengguna</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <button class="btn btn-primary-lk my-4" data-toggle="modal" data-target="#tambah-user"><i class="fa fa-plus"></i>Tambah User</button>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $i => $usr)
                <tr>
                    <td>{{$i+1}}</td>
                    <td> </td>
                    <td>{{$usr->name}}</td>
                    <td>{{$usr->alamat}}</td>
                    <td>{{$usr->email}}</td>
                    <td>{{$usr->roles[0]->name}}</td>
                    <td>
                        <button class='btn btn-warning btn-edit' value="{{$usr->id}}"><i class="fa fa-edit"></i></button>
                        <button class='btn btn-danger' value="{{$usr->id}}"><i class="fa fa-trash"></i></button>
                    </td>
    
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($role as $i => $r)
                    <tr>
                        <td>{{$i+1}}</td>    
                        <td>{{$r->name}}</td>
                        <td>
                            <button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  </div>
    
  
<div class="modal fade" id="tambah-user" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('pengguna.tambah')}}" method="post">
        @csrf
      <div class="modal-body">
        
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <label for="">NIK</label>
            <input type="text" class="form-control" name="nik" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        
        <div class="form-group">
            <label for="">Role</label>
            <select name="role" id="" required class='form-control'>
                @foreach($role as $i => $r)
                    <option value="{{$r->name}}">{{$r->name}}</option>
                @endforeach
            </select>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary-lk">Tambah Pengguna</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </form>
    </div>
  </div>
</div>



@endsection

@push("js")
<script>
  $(document).ready(function(){
    $(".btn-edit").click(function(){
      $.ajax({
        headers: {
          "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr('content')
        },
        data: {
          id: $(this).val()
        },
        url: "{{route('account.getsingleuser')}}",
        type: "get",
        dataType: "json",
        success: function(data){
          console.log(data);
          renderModalEdit(data);
        },
        error: function(err){
          alert(err.responseText);
        }
      });
    });
  })




  function renderModalEdit(data){
    var modal = $("#tambah-user");
    modal.find("input[name=name]").val(data['user']['name'])
    modal.find("input[name=nik]").val(data['user']['name'])
    modal.find("input[name=name]").val(data['user']['name'])
    modal.find("input[name=name]").val(data['user']['name'])


    modal.modal("show")
  }
</script>
@endpush