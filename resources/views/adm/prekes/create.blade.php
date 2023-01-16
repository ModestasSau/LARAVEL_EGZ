@extends('layouts.adm')
   
@section('content')
<div class="space"></div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 1.5rem;">Pridėti naują prekę</h2>
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
 
<form action="{{ route('prekes-store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pavadinimas:</strong>
                <input type="text" name="pavadinimas" class="form-control" placeholder="Pavadinimas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aprašymas:</strong>
                <textarea class="form-control" style="height:150px" name="aprasymas" placeholder="Aprašymas"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kaina:</strong>
                <input type="text" name="kaina" class="form-control" placeholder="Kaina">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kiekis:</strong>
                <input type="text" name="kiekis" class="form-control" placeholder="Kiekis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategorija:</strong>
                <select name="kategorijos_id" class="form-control">
                    @foreach($kategorijos as $kategorija)
                    <option value="{{ $kategorija->id }}">{{$kategorija->pavadinimas}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Paveikslėlis:</strong>
                <input type="file" id="photo" name="paveikslelis" class="form-control" placeholder="Paveikslėlis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="background-color: rgba(30,30,39, 0.9);">Pridėti</button>
        </div>
    </div>
      
</form>
@endsection