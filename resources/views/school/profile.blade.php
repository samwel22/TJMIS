@extends('layouts.master')


@section('content')


<section class="content">

      <div class="row">
        <div class="col-md-9">

         <div class="card border-info">
 
  <div class="card-header" style="color: #438E4C;">
  <h4><strong>School Profile</strong></h4>
  </div>
  <div class="card-header " style="color: #4A9BAB;">

  <h4><strong>School Informations</strong></h4>
  </div>
  <div class="card-body">

    <table class="table table-bordered table-dark">

       <thead>
        <tr>
          <th scope="" style="color: #F7F9F7">Information Required</th>
          <th scope="">Information Received</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>School Name:</td>
          <td>{{$schools->name}}</td>
        </tr>
          <tr>
            <td>Registration Number:</td>
            <td>{{$schools->rnumber}}</td>
          </tr>
          <tr>
            <td>Year Registered:</td>
            <td>{{$schools->year}}</td>
          </tr>
          <tr>
            <td>Address:</td>
              <td>{{$schools->address}}</td>
          </tr>
          <tr>
            <td>Phone Number:</td>
              <td>{{$schools->pnumber}}</td>
          </tr>
          <tr>
            <td>Email:</td>
              <td>{{$schools->email}}</td>
          </tr>
          

      </tbody>
      <tr>
   
    </tr>
  </table>
  <a href="{{route('school.edit',['id'=>$schools->id])}}" class="btn btn-success">Edit Profile</a>
  </div>

</div>
  </div>  
</div>
    </section>

@endsection

