
@if(session()->has('success'))
<div class="alert alert-dismissible alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  close</button>
    <span aria-hidden="true">&times;</span>
  <strong>{!!session()->get('success')!!}</strong>
</div>
@endif