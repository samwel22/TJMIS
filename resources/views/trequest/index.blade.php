@extends('layouts.master')


@section('content')


<section class="content">
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
     <th>S/N</th>
      <th scope="col">Teacher Code</th>
      <th scope="col">Teaching Subject</th>
      <th scope="col">Contract Duration</th>
      <th scope="col">Max salary</th>
       
      
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
    @foreach($treqs as  $data)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$data->tcode}}</td>
      <td>{{$data->tsubject}}</td>
      <td>{{$data->cduration}}</td>
      <td>{{$data->salary}}</td>  
    </tr>
     @endforeach
  </tbody>
</table>
    </section>

@endsection

