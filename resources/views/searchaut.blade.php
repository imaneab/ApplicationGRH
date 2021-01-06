@include("fonctionnaires.aut")
<div class="container">
<div class="row">
@if(count($fonctionnaires)>0)
@foreach($fonctionnaires as $fonctionnaire)
<!--{{ $fonctionnaire->id }}
{{ $fonctionnaire->nom }}-->
@endforeach
@endif
</div>
</div>