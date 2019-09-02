@extends('layouts.master')

@section('content')
@role('teacher')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">My Appication Status</div>

                <div class="card-body">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                            <th>S/N</th> 
                               <th>School Requested</th>
                               <th>Contract Duration</th>
                               <th>Start Date</th>
                               <th>Salary</th>
                               <th>Contact</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php $i=1; ?>
                            @foreach($treplays as  $data)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$data->sreq}}</td>
                              <td>{{$data->cduration}}</td>
                              <td>{{$data->sdate}}</td> 
                              <td>{{$data->salary}}</td> 
                              <td>{{$data->contact}}</td> 
                            </tr>
                             @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole

@role('school')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">My Successfull Teacher</div>

                <div class="card-body">
                   <table class="table table-hover">
                       <thead>
                           <tr>
                            <th>S/N</th> 
                               <th>School Requested</th>
                               <th>Contract Duration</th>
                               <th>Start Date</th>
                               <th>Salary</th>
                               <th>Contact</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php $i=1; ?>
                   
                            @foreach($treplays as  $data)
                            <tr>
                              <td>{{$i++}}</td>
                              <td>{{$data->sreq}}</td>
                              <td>{{$data->cduration}}</td>
                              <td>{{$data->sdate}}</td> 
                              <td>{{$data->salary}}</td> 
                              <td>{{$data->contact}}</td> 
                            </tr>
                             @endforeach
                          
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole

@role('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>System Adminstrator</h3></div>
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-md-6 col-md-4 ">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1 "><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Registered Teachers</span>
                <span class="info-box-number">
           
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-md-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Registered School</span>
                <span class="info-box-number">

                
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-md-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Requested Teachers</span>
                <span class="info-box-number">
             
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
             

              <div class="col-12 col-md-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Successfull Applicants</span>
                <span class="info-box-number">

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <!-- /.col -->
        </div>
        <!-- /.row -->

        

           
          </div>
          <!-- /.col -->

         
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
                
            </div>
        </div>
    </div>
</div>
@endrole




@endsection


