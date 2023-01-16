@extends('layouts.adm')

@section('content')
<div class="space"></div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="font-size: 1.5rem;">Vartotojai</h2>
        </div>
        <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-primary" href="{{ route('user-create') }}" style="background-color: rgba(30,30,39, 0.9);">Pridėti naują vartotoją</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
{{ $users->links() }}
<br>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Rolė</th>
        <th>Vardas pavardė</th>
        <th>El. Paštas</th>
        <th>Aktyvuota prieš</th>
        <th>Sukurtas prieš</th>
        <th width="350px">Veiksmai</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->usertype }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <?php 
                if($user->email_verified_at == null) {
                    echo '<strong class="color:red;"> NEAKTYVUOTA </strong>';
                } else {
                    echo $user->email_verified_at->locale('lt')->diffForHumans();
                }
            ?>
        </td>
        <td>{{ $user->created_at->locale('lt')->diffForHumans() }}</td>
        <td>
            <form action="{{ route('user-destroy', $user->id) }}" method="POST">
                <a class="btn btn-primary mb-2" style="background-color: rgba(30,30,39, 0.9);" href="{{ route('user-edit', $user->id) }}">Redaguoti</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger mb-2" style="color: black; font-weight: bold;" onclick="return confirm('Ar tikrai norite ištrinti {{ $user->name }}?')">Trinti</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection