@extends('layouts.adm')

@section('content')
<div class="space"></div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2 style="font-size: 1.5rem;">Kategorijos</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-primary" href="{{ route('kategorijos-create') }}" style="background-color: rgba(30,30,39, 0.9);"> Pridėti naują kategoriją</a>
            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 {{ $kategorijos->links() }}
 <br>
    <table class="table table-bordered">
        <tr>
            <th>Nr</th>
            <th>Pavadinimas</th>
            <th>Redagavimo data</th>
            <th width="280px">Veiksmai</th>
        </tr>
        @forelse ($kategorijos as $kategorija)
        <tr>
            <td>{{ $kategorija->id }}</td>
            <td>{{ $kategorija->pavadinimas }}</td>
            <td>
            <?php 
                if($kategorija->updated_at != null) {
                    echo $kategorija->updated_at->locale('lt')->diffForHumans();
                }
            ?>
            </td>
            <td>
                <form action="{{ route('kategorijos-destroy', $kategorija->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('kategorijos-edit', $kategorija->id) }}">Redaguoti</a>
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger" style="color: black; font-weight: bold;" onclick="return confirm('Ištrinama kategorija ir joje esančios prekės. Ar norite testi?')">Trinti</button>
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