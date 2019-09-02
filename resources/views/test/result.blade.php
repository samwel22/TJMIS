@extends('layouts.master')

@section('content')
<section class="content">
  
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th>S/N</th>
      <th scope="col">Question No</th>
      <th scope="col">Student answer</th>
       <th scope="col">Correct Answer</th>
       <th scope="col">Marks</th>

    </tr>
  </thead>
  <tbody>
   <?php $i=1; ?>
    @foreach($results as  $data)
    <tr>
    
    <td>{{$i++}}</td>
      <td>{{$data->question_id}}</td>
      <td>{{$data->answer}} </td>
        <td>{{$data->question['correct_answer']}} </td>
           <td>{{$data->question['point']}} </td>    
    </tr>

     @endforeach
     <td style="float: right;">Total Marks: /</td> 
  </tbody>

</table>


    </section>
@endsection
