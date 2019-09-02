@extends('layouts.master')


@section('content')


<section class="content">
  
       
 <a href="{{route('manager.index')}}"><abutton class="btn btn-success">Back</button></a>
  
  <br/><br/>
  <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th>S/N</th>
      <th scope="col">Full Name</th>
      <th scope="col">Education Certiicate</th>
      <th scope="col">Proffesional Certificate</th>
      <th scope="col">Birth Certificate</th>
      <th scope="col">Curriculum Vitae</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1; ?>

    @foreach($pdetails as $data)
    <tr>
    <td>{{$i++}}</td>      
     <td>{{$data->fname}} {{$data->mname}} {{$data->lname}}</td>
     <td><a href="{{route('ecertificate.download',['$id'=>$data->id])}}">Download</a></td>
      <td><a href="{{route('pcertificate.download',['$id'=>$data->id])}}">Download</a></td>
     <td><a href="{{route('bcertificate.download',['$id'=>$data->id])}}">Download</a></td>
      <td><a href="{{route('cvitae.download',['$id'=>$data->id])}}">Download</a></td>
    </tr>
     @endforeach
  </tbody>
</table>
    </section>

@endsection

