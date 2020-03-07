@extends('layouts.app')
@section('content')
	<div class="container">
	@include('partials.success')
	@include('partials.errors')
	<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
		

	  <!-- Example row of columns -->
	  <div class="row col-md-12 col-sm-12 col-lg-12" style="background: white; margin: 10px;" >
	  	<form method="POST" action="{{route('companies.store')}}">
	  			{{ csrf_field() }}
	  		<input type="hidden" name="_method" value="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Company Name</label><span class="required">*</span>
			    <input type="text" name="name" spellcheck="true" class="form-control" id="company-name" aria-describedby="emailHelp" required placeholder="Enter Company Name">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Description</label>
			     <textarea name="description"class="form-control" id="exampleFormControlTextarea1" rows="3" value
			     =""></textarea>
			  </div>
  			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	  </div>
	</div>
	

  
</div>
     

@endsection
