@extends('layouts.app')

@section('content')
<div class="container">
	@include('partials.success')
	@include('partials.errors')
	
	<div class="row">		
		<div class="list-group col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
		  <span class="list-group-item list-group-item-action active">
		    List Of Register Companies
		  </span>
		  @foreach ($companies as $company)
		  <a href="/companies/{{$company->id}}" class="list-group-item list-group-item-action">{{$company->name}}</a>
		  @endforeach		 
		</div>
	</div>
</div>
@endsection