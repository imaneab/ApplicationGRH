@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Télécharger une image</div>

                <div class="panel-body">
                    <form action="store" method="post" enctype="multipart/form-data">
                    <label for="name">Nom</label>
                    <input type="text" name="nom"><br/>

                    <label for="image">Image</label>
                    <input type="file" name="image"><br/>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" name="submit" value="Submit">
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection