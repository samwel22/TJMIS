@extends('layouts.master')

@section('title')
	Roles
@endsection

@section('content')
        <div class="container-fluid">
             <a href="{{route('roles.create')}}" class="btn btn-success">Add New</a>
       <br/><br/>
            <table class="table table-hover">
                        <div class="body">                        	
                                
                                    <thead class="thead-dark">
                                        <tr>
                                        	<th>Id</th>
                                            <th>Name</th>
                                            <th>Permission</th>
                                            <th>Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    	@foreach($roles as $row)
                                        <tr>                                        	
                                        	<td>{{ $row->id }}</td>
                                        	<td>{{ $row->name }}</td>
                                            <td>
                                                @foreach($row->permissions()->pluck('name') as $permission)
                                                    {{ $permission }},
                                                @endforeach
                                            </td>
        <td><a href="{{route('roles.edit',$row->id)}}" class="btn btn-info ">Edit</a></td>
        <td><a href="{{route('roles.destroy',$row->id)}}" class="btn btn-danger ">Delete</a></td>
                                        	                                   
                                        </tr>
                                        @endforeach
                                    </tbody>
                        </div>
                </table>
            </div>
         
           
        </div>
@endsection

