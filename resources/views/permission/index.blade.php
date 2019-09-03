
@extends('layouts.master')


@section('content')


<section class="content">
   <a href="{{route('permissions.create')}}" class="btn btn-success">Add New</a>
       <br/><br/>
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col">ID</th>
      <th scope="col">Permission Name</th>
      <th colspan="4">Action</th>
      

    </tr>
  </thead>
  <tbody>
    @foreach($permissions as $row)
    <tr>
      <td>{{ $row->id }}</td>
      <td>{{$row->name}}</td>

      <td> <a href="{{route('permissions.edit',$row->id)}}" class="btn btn-info">Edit</a></td>
     <td>

    <td><a href="{{route('permissions.destroy',$row->id)}}" class="btn btn-danger">Delete</a></td>
     
    </tr>
     @endforeach
  </tbody>
</table>
    </section>

@endsection

