@extends('layouts.master')

@section('content')
<section class="content">
  
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
     <th>S/N</th>
      <th scope="col">Name</th>
      <th scope="col">Email Address</th>
       <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
    @foreach($users as  $data)
    <tr>
    
    <td>{{$i++}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}} 
       <td><a href="{{route('user.delete',$data->id)}}" class="btn btn-danger ">Dalete</a></td>
    </tr>
     @endforeach
  </tbody>
</table>
    </section>
@endsection
