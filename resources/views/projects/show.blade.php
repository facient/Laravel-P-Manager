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

	  <!-- Example row of columns -->
	<!--   <div  class="row" style="background: white; margin: 10px;">
	  	@foreach($company->projects as $project)
	    <div class="col-md-4" >
	      <h2>{{$project->name}}</h2>
	      <p>{{$project->description}} </p>
	      <p><a class="btn btn-default" href="/projects/{{$project->id}}" role="button">View details »</a></p>
	    </div>
	   @endforeach
	  </div> -->
	</div>
	

  <div class="col-md-3 col-lg-3 pull-right">
     
      <div class="sidebar-module">
        <h4>Action</h4>
        <ol class="list-unstyled">
          <li><a href="/companies">Show Companies List</a></li>
          <li><a href="/companies/create">Add a Company</a></li>
          <li><a href="#">Add a Project</a></li>
          <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
          <li>
          	<a href="#"
          	onclick="var result=confirm('Are You Sure to Delete this company');
          	if (result) {
          	event.preventDefault();
          	document.getElementById('delete-form').submit();
          	}
          	">Delete</a>
          	<form id="delete-form"action="{{route('companies.destroy',[$company->id])}}" method="post" accept-charset="utf-8">
          			<input type="hidden" name="_method" value="delete">
          			{{csrf_field() }}
          </form></li>
        </ol>
      </div>
  </div>

</div>
     

@endsection
