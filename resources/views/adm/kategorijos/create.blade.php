@extends('layouts.adm')
   
@section('content')
<div class="space"></div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 1.5rem;">Pridėti naują kategoriją</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('kategorijos-index') }}" style="background-color: rgba(30,30,39, 0.9);"> Atgal į sąrašą</a>
        </div>
    </div>
</div>
      
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Klaida!</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('kategorijos-store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pavadinimas:</strong>
                <input type="text" name="pavadinimas" class="form-control" placeholder="Pavadinimas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" style="background-color: rgba(30,30,39, 0.9);">Pridėti</button>
        </div>
    </div>
      
</form>
@endsection