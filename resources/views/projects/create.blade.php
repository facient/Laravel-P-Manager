@extends('layouts.app')
@section('content')
	<div class="container">
	@include('partials.success')
	@include('partials.errors')
	<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
		

	  <!-- Example row of columns -->
	  <div class="row col-md-12 col-sm-12 col-lg-12" style="background: white; margin: 10px;" >
	  	<form method="POST" action="{{route('projects.store')}}">
	  			{{ csrf_field() }}


			@if(isset($company))
		  		<input type="hidden" name="company_id" value="{{$company->id}}">
		  		
				  <div class="form-group">
				    <label for="exampleInputEmail1">
				    	Project Name for {{$company->name}} Company
					<span 
						class="required">*
					</span>			    
					</label>
				    <input type="text" 
					    name="name" 
					    spellcheck="true" 
					    class="form-control" 
					    id="company-name" 
					    aria-describedby="emailHelp" 
					    required 
					    placeholder="Enter Project Name"
					    />		    
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword">Description</label>
				     <textarea name="description"class="form-control" id="exampleFormControlTextarea1" rows="3" value
				     =""></textarea>
				  </div>
			@endif
			@if(isset($userDetails))
		  		<input type="hidden" name="user_id" value="{{$userDetails->id}}">
		  		
				  <div class="form-group">
				    <label for="exampleInputEmail1">
				    	Project Name for {{$userDetails->name}} User
					<span 
						class="required">*
					</span>			    
					</label>
				    <input type="text" 
					    name="name" 
					    spellcheck="true" 
					    class="form-control" 
					    id="company-name" 
					    aria-describedby="emailHelp" 
					    required 
					    placeholder="Enter Project Name"
					    />		    
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword">Description</label>
				     <textarea name="description"class="form-control" id="exampleFormControlTextarea1" rows="3" value
				     =""></textarea>
				  </div>
			@endif
  			<button type="submit" class="btn btn-primary">Add New Project</button>
		</form>
	  </div>
	</div>
	

  
</div>
     

@endsection
