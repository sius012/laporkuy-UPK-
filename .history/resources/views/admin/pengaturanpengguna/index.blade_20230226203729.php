@extends('layouts.app')

@section("content")
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pengguna</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Role</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                        <button class='btn btn-warning' value="{{$usr->id}}"><i class="fa fa-edit"></i></button>
                        <button class='btn btn-danger' value="{{$usr->id}}"><i class="fa fa-trash"></i></button>
                    </td>
    
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <table>
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
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
  </div>
    

@endsection