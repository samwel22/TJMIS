@extends('layouts.master')

@section('title')
	Permission
@endsection

@section('content')
        <div class="container-fluid">
            
                <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Add New Permission</div>
  <div class="card-body">
    <form id="form_validation" method="POST" action="{{ route('permissions.store') }}">
                            {{ csrf_field() }}
                                <div class="form-group">
                                        <input type="text" class="form-control" name="name" required="required">
                                    
                                </div>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
    
  </div>
           
           
        </div>
      </div>

       
@endsection


