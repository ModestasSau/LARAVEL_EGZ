@extends('layouts.adm')

@section('content')
<div class="space"></div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 1.5rem;">Pridėti naują vartotoją</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('user-index') }}" style="background-color: rgba(30,30,39, 0.9);"> Atgal į sąrašą</a>
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

<form action="{{ route('user-store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vardas, pavardė:</strong>
                <input type="text" name="name" class="form-control" placeholder="Vardas, pavardė">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>El. paštas:</strong>
                <input type="text" name="email" class="form-control" placeholder="El. paštas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Slaptažodis:</strong>
                <input type="password" name="password" class="form-control" placeholder="Slaptažodis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rolė:</strong>
                <select name="usertype" class="form-control"">
                        <option selected value=" USER">USER</option>
                    <option value="ADMIN">ADMIN</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" style="background-color: rgba(30,30,39, 0.9);">Pridėti</button>
        </div>
    </div>

</form>
@endsection