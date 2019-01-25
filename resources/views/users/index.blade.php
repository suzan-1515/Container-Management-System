@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-12">
    		<h2>All Users</h2>
			<hr>
    	</div>
		<div class="col-md-2">
			<a href="{{url('/users/create')}}" class="btn btn-primary">Add New Agent</a>
		</div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">Users</div>                
                <table class="table">
                	<tr>
	                    <th>Id</th>
	                    <th>Name</th>
	                    <th>Email</th>
                        <th>Contact</th>
	                    <th>Action</th>
                    </tr>
                    @foreach ($users as $user)                    	
                    <tr>
                    	<td>{{ $user->id }}</td>
                    	<td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    	<td>-</td>
                    	<td>
                    		<a href="{{url('/users')}}/{{ $user->id }}/edit" class="btn btn-info btn-xs">Edit</a>
                    		<a href="{{url('/users')}}/{{ $user->id }}/delete" class="btn btn-danger btn-xs">Delete</a>
                    	</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
