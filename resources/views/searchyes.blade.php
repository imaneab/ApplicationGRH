@include("conges.yes")
<div class="container">
<div class="row">
@if(count($conges)>0)
@foreach($conges as $conge)
<!--{{ $fonctionnaire->id }}
{{ $fonctionnaire->nom }}-->
@endforeach
@endif
</div>
</div>