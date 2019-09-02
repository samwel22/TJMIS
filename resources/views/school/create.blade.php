@extends('layouts.master')


@section('content')



<div class="card">
	<form action="{{route('school.store')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
  <div class="card-header" style="color: #74BF93">
  <h4>  Add Your School Information</h4>
  </div>
  <div class="card-body">

  	<div class="row">

      <div class="col-sm-4"> <div class="form-group">
        <label><strong>School Name</strong></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="School Name" required="required">
                </div></div>
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Registration Number</strong></label>
                  <input type="text" name="rnumber" class="form-control" id="rnumber" placeholder="Registration Number" required="required">
                </div></div>
      <div class="col-sm-4"><div class="form-group">
        <label><strong>Registered Year</strong></label>
                  <input type="date" name="year" class="form-control" id="year"  required="required">
                </div></div>
    </div>

    <!-- second row-->

    <div class="row">

      <div class="col-sm-4"> <div class="form-group">
        <label><strong>Postal Adrress</strong></label>
            <textarea name="address" cols="5" rows="3" class="form-control" required="required"></textarea>
                </div></div>
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Email Address</strong></label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email Address" required="required">
                </div></div>
     
     <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Phone Number</strong></label>
                  <input type="text" name="pnumber" class="form-control" id="pnumber" placeholder="Phone Number" required="required">
                </div></div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
</div>

@endsection