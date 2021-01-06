@include("autorisations.yesaut")
<div class="container">
<div class="row">
@if(count($autorisations)>0)
@foreach($autorisations as $autorisation)
<!--{{ $fonctionnaire->id }}
{{ $fonctionnaire->nom }}-->
@endforeach
@endif
</div>
</div>