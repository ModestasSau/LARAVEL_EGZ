@extends('layouts.adm')

@section('content')
<div class="space"></div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 1.5rem;">Prekės</h2>
        </div>
        <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-primary" href="{{ route('prekes-create') }}" style="background-color: rgba(30,30,39, 0.9);">Pridėti naują prekę</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
{{ $prekes->links() }}
<br>
<table class="table table-bordered">
    <tr>
        <th>Kategorija</th>
        <th>Nr</th>
        <th>Pavadinimas</th>
        <th>Aprašymas</th>
        <th>Kaina</th>
        <th>Kiekis</th>
        <th>Nuotrauka</th>
        <th width="350px">Veiksmai</th>
    </tr>
    @forelse ($prekes as $preke)
    <tr>
        <td>{{ $preke->kategorija->pavadinimas }}</td>
        <td>{{ $preke->id }}</td>
        <td>{{ $preke->pavadinimas }}</td>
        <td>{{ $preke->aprasymas }}</td>
        <td>{{ $preke->kaina }}</td>
        <td>{{ $preke->kiekis }}</td>
        <td><img src="{{ asset($preke->paveikslelis) }}" width="100px"></td>
        <td>
            <form action="{{ route('prekes-destroy', $preke->id) }}" method="POST">

                <a class="btn btn-info mb-2" href="{{ route('prekes-show', $preke->id) }}">Rodyti</a>

                <a class="btn btn-primary mb-2" style="background-color: rgba(30,30,39, 0.9);" href="{{ route('prekes-edit', $preke->id) }}">Redaguoti</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger mb-2" style="color: black; font-weight: bold;" onclick="return confirm('Ar tikrai norite ištrinti {{$preke->pavadinimas}}?')">Trinti</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
            <strong>Atsiprašome, nėra duomenų.</strong><br><br>
        </tr>
    @endforelse
</table>



@endsection