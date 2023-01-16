@extends('layouts.adm')

@section('content')
<div class="space"></div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 1.5rem;">Redaguoti Prekę</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('prekes-index') }}" style="background-color: rgba(30,30,39, 0.9);"> Atgal į sąrašą</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Įvyko klaida!</strong><br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('prekes-update',$preke->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pavadinimas:</strong>
                <input type="text" name="pavadinimas" class="form-control" placeholder="Pavadinimas" value="{{ $preke->pavadinimas}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aprašymas:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Aprašymas">{{ $preke->aprasymas}}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kaina:</strong>
                <input type="text" name="kaina" class="form-control" placeholder="Kaina" value="{{ $preke->kaina}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kiekis:</strong>
                <input type="text" name="kiekis" class="form-control" placeholder="Kiekis" value="{{ $preke->kiekis}}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategorija:</strong>
                <select name="kategorijos_id" class="form-control">
                    @foreach($kategorijos as $kategorija)
                    @if($kategorija == $preke->kategorija)
                        <option selected value=" {{ $kategorija->id }}">{{$kategorija->pavadinimas}}</option>
                    @else
                    <option value="{{ $kategorija->id }}">{{$kategorija->pavadinimas}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Įkelti nuotrauką:</strong>
                <input type="file" accept="image/gif, image/jpeg, image/png" name="paveikslelis" class="form-control" placeholder="Nuotrauka" onchange="readURL(this)"><br>
                <img id="photo" src="{{ asset($preke->paveikslelis) }}" style="width: 200px; height: 200px;" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" style="background-color: rgba(30,30,39, 0.9);">Atnaujinti</button>
        </div>
    </div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#photo').attr('src', e.target.result).width(200).height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</form>
@endsection