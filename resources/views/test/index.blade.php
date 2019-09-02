@extends('layouts.master')


@section('content')

<div class="container">
 
  <form action="{{route('index.store')}}" method="post">
    {{csrf_field()}}

<div class="container">
  <h2>Welcome to Online Teacher Verification Test:</h2>

  @foreach($qns as $qn)
{{$qn->question_name}}
<div class="form-check">
    <label class="form-check-label" for="opt1">
    <input type="radio" class="form-check-input" id="opt1" 
               name="opt{{ $qn->id }}" value="a">{{$qn->opt1}}
    </label>
</div>
<div class="form-check">
    <label class="form-check-label" for="opt2">
    <input type="radio" class="form-check-input" id="opt2" 
                name="opt{{ $qn->id }}" value="b">{{$qn->opt2}}
    </label>
</div>
<div class="form-check">
    <label class="form-check-label" for="opt3">
    <input type="radio" class="form-check-input" id="opt3" 
                 name="opt{{ $qn->id }}" value="c">{{$qn->opt3}}
    </label>
</div>
<div class="form-check">
    <label class="form-check-label" for="opt4">
    <input type="radio" class="form-check-input" id="opt4" 
                 name="opt{{ $qn->id }}" value="d">{{$qn->opt4}}
    </label>
</div>
@endforeach

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

</div>
<br/><br/>
{{$qns->links()}}

<strong>Total Item:{{$qns->count()}}</strong>
@endsection