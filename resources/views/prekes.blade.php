@extends('layouts.app')

@section('content')
<!--- naujos prekes --->
<div class="space"></div>
<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">
                    <h2>

                        @if(isset($kategorija))
                        {{$kategorija->pavadinimas}}
                        @else
                        Visos prekės
                        @endif
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
    @forelse($prekes as $preke)
    <div class="product-item">
        <div class="product discount product_filter">
            <div class="product_image">
                <a href="{{ route('prekes-info', $preke->id) }}">
                    <img src="{{asset($preke->paveikslelis)}}" alt="">
                </a>
            </div>
            <div class="product_info">
                <h6 class="product_name"><a href="#">{{ $preke->pavadinimas }}</a></h6>
                <div class="product_price">{{ number_format($preke->kaina, 2) }} Eur</div>
            </div>
        </div>
        <div class="red_button add_to_cart_button"><a href="{{ route('prekes-info', $preke->id) }}">Rodyti</a></div>
    </div>
    @empty
    <strong>Atsiprašome, nėra duomenų.</strong>
    @endforelse
</div>
{{$prekes->links()}}

@endsection