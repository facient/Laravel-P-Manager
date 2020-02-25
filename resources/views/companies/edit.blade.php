@extends('layouts.app')
@section('content')
	<div class="container">
	
	<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
		

	  <!-- Example row of columns -->
	  <div class="row col-md-12 col-sm-12 col-lg-12" style="background: white; margin: 10px;" >
	  	<form method="post" action="{{route('companies.update',[$company->id])}}">
	  		{{ csrf_field() }}
	  		<input type="hidden" name="_method" value="put">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Company Name</label><span class="required">*</span>
			    <input type="text" name="name" spellcheck="true" class="form-control" id="company-name" aria-describedby="emailHelp" value="{{$company->name}}" required placeholder="Enter Company Name">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Description</label>
			     <textarea name="description"class="form-control" id="exampleFormControlTextarea1" rows="3" value
			     ="">{{$company->description}}</textarea>
			  </div>
  			<button type="submit" class="btn btn-primary">Update</button>
		</form>
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
