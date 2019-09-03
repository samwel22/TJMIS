@extends('layouts.master')

@section('title')
	Permission
@endsection



@section('content')
        <div class="container-fluid">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
<div class="card-header">Add New Role</div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{ route('roles.store') }}">
                            {{ csrf_field() }}
                                <div class="form-group">
                                  
                                        <input type="text" class="form-control" name="name" required placeholder="Name">
                                        
                               
                                    @if ($errors->has('name'))
                                        <label id="name-error" class="error" for="name">{{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Permission</label>
                                    <select class="form-control show-tick" name="permission[]" multiple required>
                                        <optgroup label="Permission" data-max-options="5">
                                            @foreach($permissions as $permission)
                                                <option>{{ $permission }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                     @if ($errors->has('permission'))
                                        <label id="name-error" class="error" for="name">{{ $errors->first('permission') }}</label>
                                    @endif
                                </div>

                                <div class="card-footer">
       <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
    </div>
                               
                        </div>
                 
           
  </div>
           
        </div>
@endsection

