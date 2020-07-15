@extends('layouts.app')

@section('content')
	<div class="container">
	@include('partials.success')
	@include('partials.errors')

	<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
		<div class="jumbotron">      
	        <h1>{{$project->name}}</h1>
	        <p class="lead">{{$project->description}}</p>
	        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>     
		</div>

	 
	</div>
	

  <div class="col-md-3 col-lg-3 pull-right">
     
      <div class="sidebar-module">
        <h4>Action</h4>
        <ol class="list-unstyled">
          <li><a href="/projects">Show Projects List</a></li>
          <li><a href="/projects/create">Add a Project</a></li>
          <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
          <li>
          	<a href="#"
          	onclick="var result=confirm('Are You Sure to Delete this Project');
          	if (result) {
          	event.preventDefault();
          	document.getElementById('delete-form').submit();
          	}
          	">Delete</a>
          	<form id="delete-form"action="{{route('projects.destroy',[$project->id])}}" method="post" accept-charset="utf-8">
          			<input type="hidden" name="_method" value="delete">
          			{{csrf_field() }}
          </form></li>
        </ol>
      </div>
  </div>

</div>
     

@endsection
