@extends('layouts.app')
@section('content')
<!--- Slider --->
<div class="main_slider" style="background-image: url({{'assets/images/banner2.jpg'}})" >
</div>
<div class="space"></div>
<!--- naujos prekes --->
<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">
                    <h2>Naujausios prekės</h2>
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
        <div class="red_button add_to_cart_button">
                <a href="{{ route('prekes-info', $preke->id) }}">Rodyti</a></div>
    </div>
    @empty
    <strong>Atsiprašome, nėra duomenų.</strong>
    @endforelse
</div>



<!--- benefits --->
<div class="benefit">
    <div class="container">
        <div class="row benefit_row">
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Nemokamas siuntimas</h6>
                        <p>Pristatysime prekes nemokamai visoje Lietuvoje!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Atsiskaitymas grynais</h6>
                        <p>Atsiskaitykite grynais atsiimdami prekes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Pristatymas per 4 darbo dienas</h6>
                        <p>Pristatysime kiek galime greičiau!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 benefit_col">
                <div class="benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Konsultantų darbo laikas</h6>
                        <p>08:00 - 20:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection