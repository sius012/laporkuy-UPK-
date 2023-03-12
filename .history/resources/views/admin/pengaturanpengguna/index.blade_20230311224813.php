@extends('layouts.app')
@section('title', 'Pengaturan Pengguna')
@section('icon', 'fa fa-users')

@section("content")
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Pengguna</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <button class="btn btn-primary-lk my-4 btn-tambah-user" data-toggle="modal" data-target="#tambah-user"><i
                class="fa fa-plus"></i>Tambah User</button>
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
                    <td>{{$usr->nik}}</td>
                    <td>{{$usr->name}}</td>
                    <td>{{$usr->alamat}}</td>
                    <td>{{$usr->email}}</td>
                    <td>{{isset($usr->roles[0]->name) ? $usr->roles[0]->name : "no"}}</td>
                    <td>
                        <button class='btn btn-warning btn-edit' value="{{$usr->id}}"><i
                                class="fa fa-edit"></i></button>
                        @if(Auth::user()->id != $usr->id)
                        <button class='btn btn-danger btn-delete' value="{{$usr->id}}"><i
                                class="fa fa-trash"></i></button>
                        @endif
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
                <input type="hidden" name="id">
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
$(document).ready(function() {
    $(".btn-delete").click(function() {
   
        var value = $(this).val();
     
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Apakah anda ingin menghapus akun ini?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                  headers: {
                    'X-CSRF-TOKEN': $("meta[name=csrf-token]").attr("content")
                  },
                  url: "{{route('account.delete')}}",
                  data: {
                    id: value
                  },
                  type: "put",
                  dataType: "json",
                  success: function(data){
                    window.location = "";
                  },error: function(err){

                  }
                });
            }
        })
    });


    $(".btn-tambah-user").click(function() {
        resetModal();
    })
    $(".btn-edit").click(function() {
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
            success: function(data) {
                console.log(data);
                renderModalEdit(data);
            },
            error: function(err) {
                alert(err.responseText);
            }
        });
    });
})




function renderModalEdit(data) {
    var modal = $("#tambah-user");


    modal.find("input[name=name]").val(data['user']['name'])
    modal.find("input[name=nik]").val(data['user']['nik'])
    modal.find("input[name=email]").val(data['user']['email'])
    modal.find("input[name=alamat]").val(data['user']['alamat'])
    modal.find("input[name=id]").val(data['user']['id'])
    modal.find("input[name=password]").attr("disabled", "disabled")

    //change title
    modal.find(".modal-title").text("Edit Pengguna")

    var form = modal.find("form");

    form.find("button[type=submit]").text("Edit Pengguna")
    //change url
    form.attr("action", "{{route('pengguna.edit')}}");



    modal.find("select[name=role]").children("option").each(function() {
        $(this).removeAttr("selected");

        if ($(this).val() == data['role'][0]["name"]) {
            $(this).attr("selected", "selected");
        }
    });


    modal.modal("show")
}

function resetModal() {
    var modal = $("#tambah-user");

    //change title
    modal.find(".modal-title").text("Tambah Pengguna")

    //change url
    var form = modal.find("form")
    form.attr("action", "{{route('pengguna.tambah')}}");
    form.attr("method", "POST")


    //change submit button
    form.find("button[type=submit]").text("Tambah Pengguna")


    //Memperbarui Modal
    modal.find("input").each(function() {
        if ($(this).attr("name") != "_token") {
            $(this).val("");
        }

    });

    modal.find("input[name=password]").removeAttr("disabled")
}
</script>
@endpush