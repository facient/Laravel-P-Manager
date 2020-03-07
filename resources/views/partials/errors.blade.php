
@if(session()->has('errors'))
<div class="alert alert-dismissible alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  close</button>
    <span aria-hidden="true">&times;</span>
  <strong>{!!session()->get('errors')!!}</strong>

 
</div>
@endif