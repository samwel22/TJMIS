@extends('layouts.master')


@section('content')


<section class="content">
    <a href="{{route('manager.index')}}"><abutton class="btn btn-success">Back</button></a>
       <a href="{{route('manager.dattach')}}"><button class="btn btn-success">Document Attachments</button></a>
      <br/><br/>
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
       <th>S/N</th>
       <th scope="col">Full Name</th>
      <th scope="col">Education Level</th>
      <th scope="col">Completion Year</th>
      <th scope="col">Working experience</th>
      <th scope="col">Other Proffesional</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    @foreach($pdetails as $data)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$data->fname}} {{$data->mname}} {{$data->lname}}</td>
      <td>{{$data->e_level}}</td>
      <td>{{$data->c_year}}</td>
      <td>{{$data->experience}}</td>
      <td>{{$data->other}}</td>
    </tr>
     @endforeach
  </tbody>
</table>
    </section>

@endsection

