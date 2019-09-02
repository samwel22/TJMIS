@extends('layouts.master')


@section('content')



<div class="container">
  <h2>Online Teacher Verification Test</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>OTVT</h3>
      
   <center><button type="submit" class="btn btn-primary" data-toggle="tab" href="#select">Create Questions</button></center><br/>
    <form action="{{route('test.update',['id'=>$qns->id])}}" method="post">
      {{csrf_field()}}
   <div id="select" class="container tab-pane fade">
   <div class="row">
      <div class="col-sm-6">
         
      <div class="form-group">
        <label><strong>Write Question</strong></label>
            <textarea name="question_name" cols="5" rows="3" class="form-control" required="required">{{$qns->question_name}}</textarea>
                </div>

              <div class="form-group">
        <label><strong>Option 1</strong></label>
                  <input type="text" name="opt1" class="form-control" id="opt1" placeholder="Option 1" value="{{$qns->opt1}}" required="required">
                </div>  

                <div class="form-group">
        <label><strong>Option 2</strong></label>
                  <input type="text" name="opt2" class="form-control" id="opt2" placeholder="Option 2" value="{{$qns->opt2}}" required="required">
                </div>  

                <div class="form-group">
        <label><strong>Option 3</strong></label>
                  <input type="text" name="opt3" class="form-control" id="opt3" placeholder="Option 3" value="{{$qns->opt3}}" required="required">
                </div>  

                <div class="form-group">
        <label><strong>Option 4</strong></label>
                  <input type="text" name="opt4" class="form-control" id="opt4" placeholder="Option 4" value="{{$qns->opt4}}" required="required">
                </div>  

      </div>
      <div class="col-sm-3">
        
        <div class="form-group">
        <label><strong>Answer</strong></label>
                  <input type="text" name="ans" class="form-control" id="ans" placeholder="Answer" value="{{$qns->ans}}" required="required">
                </div>  
      </div>
      <div class="col-sm-3">
        <div class="form-group">
            <label><strong>Select Point</strong></label>
             <select name="point" id="point" class="form-control">
             <option value="{{$qns->point}}">{{$qns->point}}</option>
             <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
             </select>
                </div>
      </div>
    </div>
          <button type="submit" class="btn btn-success">Update</button>
    </div>

    </form>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Show Profile</h3>
      
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>




@endsection