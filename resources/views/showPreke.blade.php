@extends('layouts.app')
@section('content')

<div class="space"></div>
<div class="container px-3 my-5">
    <div class="row benefit_row">
        <div class="col-lg-12 benefit_col">
            <div class="pull-left">
                <h2 style="font-size: 1.5rem;">{{$preke->pavadinimas}}</h2>
            </div>
        </div>
        <div class="col-lg-12 benefit_col mt-3">
            <a class="btn btn-primary" href="{{ url()->previous() }}" style="background-color: rgba(30,30,39, 0.9);">Grįžti</a>
        </div>
    </div>
    <div class="space"></div>
    <div class="row">
        <div class="col-lg-6">
            <div class="align-items-center">
                <div class="benefit_content" style="width:400px">
                    <img class="card-img-top" src="{{ asset($preke->paveikslelis) }}" alt="Card image" style="width:100%">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="align-items-center">
                <div class="benefit_content">
                    <form action="{{ url('/krepselis/prideti-preke') }}" method="POST">
                        @csrf

                        <input type="hidden" value="{{ $preke->id }}" name="prekes_id">

                        <p class="card-text" style="font-size: 1.2rem;"><strong>Kategorija: &nbsp&nbsp</strong><br><br> {{ $preke->pavadinimas }} </p><br>
                        <p class="card-text" style="font-size: 1.2rem;"><strong>Aprašymas: &nbsp&nbsp</strong><br><br> {{ $preke->aprasymas }} </p><br>
                        <p class="card-text" style="font-size: 1.2rem;"><strong>Kaina: &nbsp&nbsp</strong><br><br> {{ $preke->kaina }} EUR</p><br>
                        <p class="card-text" style="font-size: 1.2rem;"><strong>Pasirinkite kiekį: &nbsp&nbsp</strong><br><br>
                            <input style="font-size: 1.2rem;" type="number" value="1" min="1" name="kiekis">
                        </p><br>
                        <a class="btn btn-primary" role="button" onclick="this.closest('form').submit()" style="color: white ;background-color: rgba(30,30,39, 0.9); font-size: 1.2rem;"> Pridėti į krepšelį</a>
                        <br>
                        <br>
                        @if(Session::has('error_message'))
                        <p style="font-size: 1.2rem;">Klaida! <strong style="color:Red;">{{ Session::get('error_message') }}</strong></p>
                        @endif
                        @if(Session::has('success_message'))
                        <p style="font-size: 1.2rem;"><strong style="color:green;">{{ Session::get('success_message') }}</strong></p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @endsection