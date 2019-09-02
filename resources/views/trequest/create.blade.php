@extends('layouts.master')


@section('content')



<div class="card">
  <form action="{{route('trequest.store')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="card-header" style="color: #74BF93">
  <h4> Request Teacher Data</h4>
  </div>
  <div class="card-body">

    <div class="row">

      <div class="col-sm-4"> <div class="form-group">
        <label><strong>Teacher Code</strong></label>
                  <input type="text" name="tcode" class="form-control" id="tcode" placeholder="Teacher Code" required="required">
                </div></div>
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Teaching Subject</strong></label>
                  <input type="text" name="tsubject" class="form-control" id="tsubject" placeholder="Teaching Subject" required="required">
                </div></div>
      <div class="col-sm-4"><div class="form-group">
        <label><strong>Contract Duration</strong></label>
                  <select name="cduration" id="cduration" class="form-control" required="required">
             <option value="">Select Duration</option>
             <option value="1-Year">1-Year</option>
              <option value="2-Years">2-Years</option>
              <option value="3-Years">3-Years</option>
              <option value="4-Years">4-Years</option>
              <option value="5-Years">5-Years</option>
              <option value="6-Years">6-Years</option>
              <option value="7-Years">7-Years</option>
              <option value="8-Years">8-Years</option>
              <option value="9-Years">9-Years</option>
              <option value="10-Years">10-Years</option>
             </select>
                </div></div>
    </div>

    <!-- second row-->

    <div class="row">
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Salary Range</strong></label>
                  <input type="text" name="salary" class="form-control" id="salary" placeholder="Salary Range" required="required">
                </div></div>
     
     
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>
</div>

@endsection