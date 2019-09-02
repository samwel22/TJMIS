@extends('layouts.master')


@section('content')



<div class="card">
	<form action="{{route('pdetail.store')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
  <div class="card-header" style="color: #74BF93">
  <h4>  Add Your Personal Information</h4>
  </div>
  <div class="card-body">

  	<div class="row">

      <div class="col-sm-4"> <div class="form-group">
        <label><strong>First Name</strong></label>
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required="required">
                </div></div>
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Middle Name</strong></label>
                  <input type="text" name="mname" class="form-control" id="mname" placeholder="Middle Name" required="required">
                </div></div>
      <div class="col-sm-4"><div class="form-group">
        <label><strong>Last Name</strong></label>
                  <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required="required">
                </div></div>
    </div>

    <!-- second row-->

    <div class="row">

      <div class="col-sm-4"> <div class="form-group">
        <label><strong>Date of Birth</strong></label>
                  <input type="date" name="dob" class="form-control" id="dob"  required="required">
                </div></div>
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Gender</strong></label>
             <select name="gender" id="gender" class="form-control" required="required">
             <option value="">Select Gender</option>
             <option value="Male">Male</option>
              <option value="Female">Female</option>
             </select>
                </div></div>
      <div class="col-sm-4"><div class="form-group">
        <label><strong>Nationality</strong></label>
             <select name="country" id="country" class="form-control" required="required">
             <option value="">Select Country</option>
             <option value="Tanzania">Tanzania</option>
              <option value="Kenya">Kenya</option>
              <option value="Uganda">Uganda</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Burundi">Burundi</option>
              <option value="South Africa">South Africa</option>
             </select>
                </div></div>
    </div>

    <!-- third row -->

    <div class="row">

      <div class="col-sm-4"> <div class="form-group">
        <label><strong>Phone Number</strong></label>
                  <input type="text" name="pnumber" class="form-control" id="pnumber" placeholder="Eg +255 767 990 990" required="required">
                </div></div>
      <div class="col-sm-4"><div class="form-group">
                <label><strong>Disability</strong></label>
             <select name="disability" id="disability" class="form-control" required="required">
             <option value="">Select Disability</option>
             <option value="None">None</option>
              <option value="Brain disability">Brain disability</option>
              <option value="Hearing disability">Hearing disability</option>
              <option value="Physical/Mobility disability">Physical/Mobility disability</option>
              <option value="Speech disability">Speech disability</option>
              <option value="Spinal Cord disability">Spinal Cord disability </option>
              <option value="Vision disability">Vision disability </option>
             </select>
                </div></div>

                <div class="col-sm-4"><div class="form-group">
        <label><strong>Teaching Subject</strong></label>
                  <input type="text" name="tsubject" class="form-control" id="tsubject" placeholder="Physics & Maths" required="required">
                </div></div>
      
    </div>
        <!-- fourth row-->
    <div class="row">

     <div class="col-sm-4"><div class="form-group">
        <label><strong>Postal Adrress</strong></label>
            <textarea name="address" cols="5" rows="3" class="form-control" required="required"></textarea>
                </div></div>
      <div class="col-sm-4"><div class="form-group">
                <label><strong>Marital Status</strong></label>
             <select name="marital" id="marital" class="form-control" required="required">
             <option value="">Select</option>
             <option value="Married">Married</option>
              <option value="Single">Single</option>
             </select>
                </div></div>

                <div class="col-sm-4"><div class="form-group">
        <label><strong>Current Residence</strong></label>
                  <input type="text" name="cresidence" class="form-control" id="cresidence" placeholder="Current Residence" required="required">
                </div></div>
      
    </div>

    <!-- fifth row-->
    <div class="row">

     <div class="col-sm-4"><div class="form-group">
          <label><strong>Permanent Residence</strong></label>
                  <input type="text" name="presidence" class="form-control" id="presidence" placeholder="Permanent Residence" required="required">
     </div>
   </div>
 </div>
    
   
  </div>



   <div class="card-header" style="color: #74BF93">
  <h4> Education Background</h4>
  </div>
  <div class="card-body">

    <div class="row">

      <div class="col-sm-4"> <div class="form-group">
            <label><strong>Select Education Level</strong></label>
             <select name="e_level" id="e_level" class="form-control">
             <option value="">Select Education Level</option>
             <option value="Masters">Masters</option>
              <option value="Degree">Degree</option>
              <option value="Diploma">Diploma</option>
              <option value="Certificate">Certificate</option>
             </select>
                </div></div>
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Completion Year</strong></label>
                   <input type="date" name="c_year" class="form-control" id="c_year"  required="required">
                </div></div>
      <div class="col-sm-4"><div class="form-group">
        <label><strong>Working Experience</strong></label>
                  <select name="experience" id="experience" class="form-control">
             <option value="">Select Working Experience</option>
             <option value="0-1 Year">0-1 Years</option>
              <option value="2-4 Years">2-4 Years</option>
              <option value="5-10 Years">5-10 Years</option>
              <option value="11-21 Years">11-21 Years</option>
             </select>
                </div></div>
    </div>

    <!-- second row-->

    <div class="row">

     
      <div class="col-sm-4"><div class="form-group">
        <label><strong>Other Proffesinals</strong></label>
            <textarea name="other" cols="5" rows="3" class="form-control"></textarea>
                </div></div>
    </div>

  <div class="card-header" style="color: #74BF93">
  <h4>Documents Attachment</h4>
  </div>
  <div class="card-body">

    <div class="row">

      <div class="col-sm-4"> <div class="form-group">
            <label><strong> Education Certificates</strong></label>
             <input type="file" name="ecertificates">
                </div></div>
      <div class="col-sm-4">
                <div class="form-group">
                  <label><strong>Proffesinal Certificates</strong></label>
                   <input type="file" name="pcertificates">
                </div></div>
      <div class="col-sm-4"><div class="form-group">
        <label><strong>Birth Certificate</strong></label>
                  <input type="file" name="bcertificates">
                </div></div>
    </div>
    <div class="row">

      <div class="col-sm-4"> <div class="form-group">
            <label><strong> Curriculum Vite</strong></label>
             <input type="file" name="cvitae">
                </div></div>
    </div>

    <!-- second row-->

    

   
    
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
</div>

@endsection