
@if(isset($errors)&&count($errors)>0)
<div class="alert alert-dismissible alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  close</button>
    <span aria-hidden="true">&times;</span>
    @foreach($errors->all() as $error)
  <li><strong>{!!session()->get('success')!!}</strong></li>
</div>
@endif