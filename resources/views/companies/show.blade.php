@extends('layouts.app')

@section('content')
	<div class="container">
	@include('partials.success')

	<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
		<div class="jumbotron">      
	        <h1>{{$company->name}}</h1>
	        <p class="lead">{{$company->description}}</p>
	        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>     
		</div>

	  <!-- Example row of columns -->
	  <div  class="row" style="background: white; margin: 10px;">
	  	@foreach($company->projects as $project)
	    <div class="col-md-4" >
	      <h2>{{$project->name}}</h2>
	      <p>{{$project->description}} </p>
	      <p><a class="btn btn-default" href="/projects/{{$project->id}}" role="button">View details »</a></p>
	    </div>
	   @endforeach
	  </div>
	</div>
	

  <div class="col-md-3 col-lg-3 pull-right">
     
      <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">Add a New User</a></li>
          <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
          <li><a href="#">Delete</a></li>
        </ol>
      </div>
  </div>

</div>
     

@endsection
