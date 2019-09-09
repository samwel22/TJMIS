
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/fontawesome/font-awesome/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Teachers</b>Junction</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">New User Registration Form</p>

    <form action="{{route('register')}}" method="post">
      {{csrf_field()}}

       <div class="form-group {{$errors->has('name') ? 'has-error' : ''}} has-feedback">
        <input id="name" value="{{old('email')}}" type="text" name="name" class="form-control" placeholder="Full Name">

        @if($errors->has('name'))
            <span class="help-block">
                <strong>{{$errors->first('name')}}</strong>
              
            </span>
            @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group {{$errors->has('email') ? 'has-error' : ''}} has-feedback">
        <input id="email" value="{{old('email')}}" type="email" name="email" class="form-control" placeholder="Email">

        @if($errors->has('email'))
            <span class="help-block">
                <strong>{{$errors->first('email')}}</strong>
              
            </span>
            @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group {{$errors->has('password') ? 'has-error' : ''}} has-feedback">
        <input id="password" value="{{old('password')}}"  type="password" name="password" class="form-control" placeholder="Password">

        @if($errors->has('password'))
            <span class="help-block">
                <strong>{{$errors->first('password')}}</strong>
              
            </span>
            @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

       <div class="form-group  has-feedback">
        <input id="password-confirm"  type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group row">
            <div class="col-md-6">
                <select name="roles" id="role" class="form-control" required="required">
                 <option value="">Select Status</option>
                 <option value="1">admin</option>
                  <option value="2">teacher</option>
                  <option value="3">school</option>

                 </select>
                                
                            </div>
                        </div>
      <div class="row">
       
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="{{route('login')}}" class="text-center">Already registered?|Login</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
