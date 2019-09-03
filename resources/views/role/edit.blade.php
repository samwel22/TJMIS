@extends('layouts.master')

@section('title')
    Edit Permission
@endsection


@section('content')
        <div class="container-fluid">
            

         
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Update Role</div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{ route('roles.update',$role->id) }}">
                            {{ csrf_field() }}
                                <div class="form-group">
                                        <input type="text" class="form-control" name="name" value="{{ $role->name }}" required>
                                        
                                   
                                </div>
                                 <div class="form-group"> 
                                    <select class="form-control show-tick selectpicker" name="permission[]" id="your-select" multiple>
                                        <optgroup label="Permissions" data-max-options="5">
                                            @foreach($permissions as $permission)
                                                <option>{{ $permission }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="card-footer">
       <button class="btn btn-success" type="submit">Update</button>
                            </form>
    </div>
                              
                        </div>
          
              
   
       </div>
           
        </div>
@endsection

   


