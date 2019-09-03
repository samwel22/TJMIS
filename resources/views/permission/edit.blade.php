@extends('layouts.master')

@section('title')
    Edit Permission
@endsection



@section('content')
        <div class="container-fluid">
           
              <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Update Permission</div>
  <div class="card-body">
<form id="form_validation" method="POST" action="{{route('permissions.update',$permission->id)}}">
                            {{ csrf_field() }}
                                <div class="form-group">
                                        <input type="text" class="form-control" value="{{$permission->name}}" name="name" required="required">
                                    
                                </div>
                                <button class="btn btn-success" type="submit">Update</button>
                            </form>
    
  </div>
           
        </div>
@endsection

