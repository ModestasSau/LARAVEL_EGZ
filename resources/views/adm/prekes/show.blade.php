@extends('layouts.adm')

@section('content')
<div class="space"></div>


<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-size: 1.5rem;">{{$preke->pavadinimas}}</h2>
            </div>

        </div>
    </div>
    <div class="card" style="width:400px">
        <img class="card-img-top" src="{{ asset($preke->paveikslelis) }}" alt="Card image" style="width:100%">
        <div class="card-body">
            <p1 class="card-text"><strong>Kategorija: &nbsp&nbsp</strong>{{ $preke->kategorija->pavadinimas }}</p1><br>
            <p1 class="card-text"><strong>Aprašymas: &nbsp&nbsp</strong>{{ $preke->aprasymas }}</p1><br>
            <p1 class="card-text"><strong>Kaina: &nbsp&nbsp</strong>{{ $preke->kaina }}</p1><br>
            <p1 class="card-text"><strong>Kiekis: &nbsp&nbsp</strong>{{ $preke->kiekis }}</p1><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mt-3">
            <a class="btn btn-primary" href="{{ route('prekes-index') }}" style="background-color: rgba(30,30,39, 0.9);"> Atgal į sąrašą</a>
        </div>
    </div>
</div>

@endsection