@extends('users.userslayouts.master')
@section('content')
<div class="container d-flex justify-content-center">
  <!--table to showcase leave data-->
  <div class="card col-md-12">
    <div class="card-body">
      <h1 class="bg-warning text-center">
      <i class=""></i> Registered <small>Users</small>
      </h1>
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col"> Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
          </tr>
        </thead>
        <tbody>
           @foreach($data as $data)
          <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->gender}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop