@extends('layouts.master')


@section('content')


<section class="content">
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
     <th>S/N</th>
     <th scope="col">Code</th>
      <th scope="col">School Name</th>
      <th scope="col">Registration </th>
      <th scope="col">Registered Year</th>
      <th scope="col">Postal Address</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone Number</th>
      
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
    @foreach($schools as  $data)
    <tr>
    
    <td>{{$i++}}</td>
      <td>{{$data->code}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->rnumber}}</td>
      <td>{{$data->year}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->pnumber}}</td>
    </tr>
     @endforeach
  </tbody>
</table>
    </section>

@endsection

