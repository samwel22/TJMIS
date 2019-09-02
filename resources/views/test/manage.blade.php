@extends('layouts.master')


@section('content')


<section class="content">
      <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
     <th>S/N</th>
      <th scope="col">Question</th>
      <th scope="col">Option 1</th>
      <th scope="col">Option 2</th>
      <th scope="col">Option 3</th>
      <th scope="col">Option 4</th>
      <th scope="col">Answer</th>
      <th scope="col">Point</th>
      <th scope="col">Action</th>
    
       
      
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
    @foreach($qns as  $data)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$data->question_name}}</td>
      <td>{{$data->opt1}}</td>
      <td>{{$data->opt2}}</td>
      <td>{{$data->opt3}}</td> 
      <td>{{$data->opt4}}</td> 
      <td>{{$data->ans}}</td> 
      <td>{{$data->point}}</td> 
       <td><a href="{{route('test.edit',['id'=>$data->id])}}" class="btn btn-info ">Edit</a></td>
        
    </tr>
     @endforeach
  </tbody>
</table>
    </section>

@endsection

