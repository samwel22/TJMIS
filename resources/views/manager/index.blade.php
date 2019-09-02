@extends('layouts.master')


@section('content')


<section class="content">
  <a href="{{route('manager.eback')}}"><abutton class="btn btn-success">Education Background</button></a>
  <a href="{{route('manager.dattach')}}"><button class="btn btn-success">Document Attachments</button></a>
       <br/><br/>
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
     <th>S/N</th>
      <th scope="col">Code</th>
      <th scope="col">Full Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Nationality</th>
      <th scope="col">Disability</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Teaching Subject</th>
      <th scope="col">Postal Address</th>
      <th scope="col">Marital Status</th>
      <th scope="col">Current Residence</th>
      <th scope="col">Permanent Residence</th>
       <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
    @foreach($pdetails as  $data)
    <tr>
    
    <td>{{$i++}}</td>
      <td>{{$data->tcode}}</td>
      <td>{{$data->fname}} {{$data->mname}} {{$data->lname}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->country}}</td>
      <td>{{$data->disability}}</td>
      <td>{{$data->pnumber}}</td>
      <td>{{$data->tsubject}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->marital}}</td>
      <td>{{$data->cresidence}}</td>
      <td>{{$data->presidence}}</td>
       <td><a href="{{route('pdetail.delete',$data->id)}}" class="btn btn-danger ">Trush</a></td>
    </tr>
     @endforeach
  </tbody>
</table>
    </section>

@endsection

