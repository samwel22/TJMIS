@extends('layouts.master')


@section('content')


<section class="content">

      <div class="row">
        <div class="col-md-9">

         <div class="card border-info">
 
  <div class="card-header" style="color: #438E4C;">
  <h4><strong>My Profile </strong></h4>
  </div>
  <div class="card-header " style="color: #4A9BAB;">

  <h4><strong>Personal Informations</strong></h4>
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
          <td>Full  Name:</td>
          <td>{{$pdetails->fname}} {{$pdetails->mname}} {{$pdetails->lname}}</td>
        </tr>
          <tr>
            <td>Date of Birth:</td>
            <td>{{$pdetails->dob}}</td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td>{{$pdetails->gender}}</td>
          </tr>
          <tr>
            <td>Nationality:</td>
              <td>{{$pdetails->country}}</td>
          </tr>
          <tr>
            <td>Phone Number:</td>
              <td>{{$pdetails->pnumber}}</td>
          </tr>
          <tr>
            <td>Disability:</td>
              <td>{{$pdetails->disability}}</td>
          </tr>
          <tr>
            <td>Teaching Subject:</td>
            <td>{{$pdetails->tsubject}}</td>
          </tr>
          <tr>
            <td>Postal Address:</td>
            <td>{{$pdetails->address}}</td>
          </tr>
          <tr>
            <td>Marital Status:</td>
            <td>{{$pdetails->marital}}</td>
          </tr>
          <tr>
            <td>Current Residence:</td>
            <td>{{$pdetails->cresidence}}</td>
          </tr>
          <tr>
            <td>Permanent Residence:</td>
            <td>{{$pdetails->presidence}}</td>
          </tr>
          

      </tbody>
      <tr>
   
    </tr>
  </table>
  
  </div>

</div>
        </div>
     
     
     
</div>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
      <div class="row">
        <div class="col-md-9">

         <div class="card border-info">
 
  <div class="card-header" style="color: #4A9BAB;  ">
  <h4><strong>Education Background</strong></h4>
  </div>
  
  <div class="card-body">

    <table class="table table-bordered table-dark">


      <thead>
        <tr>
          <th scope="">Information Required</th>
          <th scope="">Information Received</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Education Level:</td>
          <td>{{$pdetails->e_level}}</td>
        </tr>
        <tr>
          <td>Completion Year:</td>
          <td>{{$pdetails->c_year}}</td>
        </tr>
        <tr>
          <td>Working Experience:</td>
          <td>{{$pdetails->experience}}</td>
        </tr>
        <tr>
          <td>Other Proffesional:</td>
          <td>{{$pdetails->other}}</td>
        </tr>
      </tbody>
      <tr>
  </tr>
  </table>
</div>
</div>
</div>
</div>
 <!--@@@@@@@@@@@@@@@@@@@@@@@@@@@attachements@@@@@@@@@@@@@@@@@@@@-->
<div class="row">
        <div class="col-md-9">

         <div class="card border-info">
 
  <div class="card-header" style="color: #4A9BAB;  ">
  <h4><strong>Document attachements</strong></h4>
  </div>
  
  <div class="card-body">

    <table class="table table-bordered table-dark">


      <thead>
        <tr>
          <th scope="">Information Required</th>
          <th scope="">Information Received</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Education Certificate:</td>
          <td><a href="{{route('ecertificate.download',['$id'=>$pdetails->id])}}">Download</a></td>
        </tr>
        <tr>
          <td>Professional Certificate:</td>
           <td><a href="{{route('pcertificate.download',['$id'=>$pdetails->id])}}">Download</a></td>
        </tr>
        <tr>
          <td>Birth Certificate:</td>
          <td><a href="{{route('bcertificate.download',['$id'=>$pdetails->id])}}">Download</a></td>
          
        </tr>
        <tr>
          <td>Curriculum Vitae</td>
          <td><a href="{{route('cvitae.download',['$id'=>$pdetails->id])}}">Download</a></td>
         
        </tr>
      </tbody>
      <tr>
  </tr>
  </table>
  <a href="{{route('pdetail.edit',['id'=>$pdetails->id])}}" class="btn btn-success">Edit Profile</a>
  </div>

</div>
  </div>
     
</div>
    </section>

@endsection

