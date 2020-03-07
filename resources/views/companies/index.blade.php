@extends('layouts.app')

@section('content')
<div class="container">
	@include('partials.success')
	@include('partials.errors')
	
	<div class="row">
		<div class="pull-left list-group col-md-6 col-lg-6 ">
		  <span class="list-group-item list-group-item-action active">
		    List Of Registered Companies
		  </span>
		  @foreach ($companies as $company)
		  <a href="/companies/{{$company->id}}" class="list-group-item list-group-item-action">{{$company->name}}</a>
		  <!-- <a href="/companies/{{$company->id}}/edit">Edit</a> -->
		  @endforeach		 
		</div>
		<!-- <div class="list-group col-md-3 col-lg-3 ">
		  <span class="list-group-item list-group-item-action active">
		    Action
		  </span>
		  <ul class="list-group-item list-group-item-action">
	          <li><a href="/companies/create">Add a Company</a></li>
	          <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
	          <li>
	          	<a href="#"
	          	onclick="var result=confirm('Are You Sure to Delete this company');
	          	if (result) {
	          	event.preventDefault();
	          	document.getElementById('delete-form').submit();
	          	}">Delete</a>
	          		<form id="delete-form"action="{{route('companies.destroy',[$company->id])}}" method="post" accept-charset="utf-8">
	          			<input type="hidden" name="_method" value="delete">
	          			{{csrf_field() }}
	          		</form>
	      		</li>
        </ul>
		</div> -->
	</div>
</div>
@endsection