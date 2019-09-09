@extends('layouts.master')

@section('content')

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
                    {{$pdetails}}
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
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Registered School</span>
                <span class="info-box-number">

                         {{ $schools}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-md-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Requested Teachers</span>
                <span class="info-box-number">
               {{ $trequests}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
             

              <div class="col-12 col-md-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Successfull Applicants</span>
                <span class="info-box-number">
               {{$treplays}}
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
@endsection