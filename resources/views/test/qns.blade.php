@extends('layouts.master')


@section('content')



<div class="container">
  <h2>Online Teacher Verification Test</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Questions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Result</a>
    </li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>OTVT</h3>
      
   <center><button type="submit" class="btn btn-primary" data-toggle="tab" href="#select">Create Questions</button></center><br/>
    <form action="{{route('qns.store')}}" method="post">
      {{csrf_field()}}
   <div id="select" class="container tab-pane fade">
   <div class="row">
      <div class="col-sm-6">
        

      <div class="form-group">
        <label><strong>Write Question</strong></label>
            <textarea name="question_name" cols="5" rows="3" class="form-control" required="required"></textarea>
                </div>

              <div class="form-group">
        <label><strong>Option 1</strong></label>
                  <input type="text" name="opt1" class="form-control" id="opt1" placeholder="Option 1" required="required">
                </div>  

                <div class="form-group">
        <label><strong>Option 2</strong></label>
                  <input type="text" name="opt2" class="form-control" id="opt2" placeholder="Option 2" required="required">
                </div>  

                <div class="form-group">
        <label><strong>Option 3</strong></label>
                  <input type="text" name="opt3" class="form-control" id="opt3" placeholder="Option 3" required="required">
                </div>  

                <div class="form-group">
        <label><strong>Option 4</strong></label>
                  <input type="text" name="opt4" class="form-control" id="opt4" placeholder="Option 4" required="required">
                </div>  

      </div>
      <div class="col-sm-3">
        
        <div class="form-group">
        <label><strong>Answer</strong></label>

                  <select name="correct_answer" id="correct_answer" class="form-control">

             <option value="">Select Option Answer</option>
             <option value="a">a</option>
              <option value="b">b</option>
              <option value="c">c</option>
              <option value="d">d</option>
             
             </select>
                </div>  
      </div>
      <div class="col-sm-3">
        <div class="form-group">

            <label><strong>Locate Marks</strong></label>
             <select name="point" id="point" class="form-control">
             <option value="">Select Marks</option>

             <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
             </select>
                </div>
      </div>
    </div>
          <button type="submit" class="btn btn-primary">Save</button>
    </div>

    </form>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3><a href="{{route('test.result')}}">Click To View Results</a></h3>
      
    
  </div>
</div>




@endsection