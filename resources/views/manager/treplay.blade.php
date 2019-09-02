@extends('layouts.master')


@section('content')



<div class="card">
  <form action="{{route('manager.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="card-header" style="color: #74BF93">
  <h4> Replay to Requested Teacher</h4>
  </div>
  <div class="card-body">

    <div class="row">

      <div class="col-sm-4"> <div class="form-group">
        <label><strong>Teacher Code</strong></label>
                  <input type="text" name="tcode" class="form-control" id="tcode" placeholder="Teacher Code" required="required">
                </div></div>
                <div class="col-sm-4"> <div class="form-group">
        <label><strong>School Code</strong></label>
                  <input type="text" name="code" class="form-control" id="code" placeholder="School Code" required="required">
                </div></div>
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>School Requested</strong></label>
                  <input type="text" name="sreq" class="form-control" id="sreq" placeholder="School Requested" required="required">
                </div></div>
      
    </div>

    <!-- second row-->

    <div class="row">

<div class="col-sm-4"><div class="form-group">
        <label><strong>Contract Duration</strong></label>
              <input type="text" name="cduration" class="form-control" id="cduration" placeholder="Contract Duration" required="required">
                </div></div>


      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Start Date</strong></label>
                  <input type="date" name="sdate" class="form-control" id="sdate"  required="required">
                </div></div>

                <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Salary</strong></label>
                  <input type="text" name="salary" class="form-control" id="salary" placeholder="Salary Range" required="required">
                </div></div>
     
     
     
    </div>


    <div class="row"> 
     
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Contacts</strong></label>
                    <textarea name="contact" cols="5" rows="3" class="form-control" required="required" placeholder="Contacts"></textarea>
                </div></div>
     
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
</div>

@endsection