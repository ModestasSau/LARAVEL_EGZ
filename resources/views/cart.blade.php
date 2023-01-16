@extends('layouts.app')
@section('content')
<script>
    setTimeout(function() {
        $('#successMessage').fadeOut('fast');
        $('#successMessage1').fadeOut('fast');
        $('.dynamic_select').on('change', function() {
            $('#successMessage').fadeOut('fast');
            $('#successMessage1').fadeOut('fast');
        })
    }, 2000);

    $(function() {
        $('.dynamic_select').on('change', function() {
            var kiekis = $(this).val();
            var kiekisnum = parseInt(kiekis);
            var id = $(this).parent().parent().attr("id");
            string = "{{ url('/krepselis') }}" + "/" + id + "/" + kiekis;
            var element = document.getElementById("patikrink");
            console.log(string);
            if (id) {
                {
                    if (Number.isInteger(kiekisnum)) {
                        element.classList.add("hidden");
                        window.location = string;
                    } else {
                        element.classList.remove("hidden");
                        document.getElementById("patikrink").innerHTML = "Blogas kiekio formatas!";
                        setTimeout(function() {
                            element.classList.add("hidden");
                        }, 2000);
                    }
                }


            }
            return false;
        });
    });
</script>


<div class="space"></div>
<div class="container px-3 my-5">
    <!-- Shopping cart table -->
    <div class="card">

        <div class="card-header">
            <p1 class="text-lg font-weight-bold">Krepšelis
                <div class="text-right">
                    <a class="btn btn-secondary mr-3" href="{{ route('pdf') }}">Formuoti PDF</a>
                </div>
            </p1>

        </div>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <!-- Set columns width -->
                            <th class="text-center py-3 px-4" style="max-width: 200px;">Prekės pavadinimas</th>
                            <th class="text-right py-3 px-4" style="width: 150px;">Kaina</th>
                            <th class="text-center py-3 px-4" style="width: 200px;">Kiekis</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Suma</th>
                            <th class="text-center align-middle py-3 px-0" style="width: 80px;"><a href="#" class="shop-tooltip float-none text-dark" title="" data-original-title="Clear cart"><i class="fa-lg fa fa-trash"></i> Išvalyti</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        ?>
                        @forelse($prekes as $preke)
                        <?php
                        $total += number_format(($preke['prekes']['kaina'] * $preke['kiekis']), 2)
                        ?>
                        <tr id="{{ $preke['prekes']['id'] }}">
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <img src="{{ asset($preke['prekes']['paveikslelis']) }}" class="d-block ui-w-40 ui-bordered mr-4" style="max-width: 100px;" alt="">
                                    <div class="media-body">
                                        <a href="{{ route('prekes-info', $preke['prekes']['id']) }}" class="d-block text-dark">{{ $preke['prekes']['pavadinimas'] }}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4">
                                <p1 class="kaina">{{ number_format($preke['prekes']['kaina'], 2) }}</p1>
                                <p2> Eur</p2>
                            </td>
                            <td class="text-center align-middle">
                                <!--<a class="button btn btn-secondary m-1" href="{{ url('/krepselis/m/'.$preke['prekes_id']) }}">-</a>-->
                                <input type="number" pattern="\d*" class="dynamic_select text-center" style="width: 70px;" min="1" step="1" value="{{ $preke['kiekis'] }}">

                                <!--<a class="button btn btn-secondary m-1" href="{{ url('/krepselis/d/'.$preke['prekes_id']) }}">+</a>-->
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4">
                                <p1 class="suma"> {{ number_format(($preke['prekes']['kaina']*$preke['kiekis']), 2) }}
                            </td>
                            <td class="text-center align-middle px-0"><a href="{{ route('trintiPreke', $preke['id']) }}" class="shop-tooltip close float-none text-danger">x</a></td>
                        </tr>
                        @empty
                        <div class="text-center">
                            <h1 style="font-size: 1.2rem;">Krepšelis tuščias!</h1>
                        </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- / Shopping cart table -->

            <div class="d-flex flex-wrap justify-content-end align-items-center pb-4">
                <div class="d-flex">
                    <div class="text-right mt-4">
                        <label class="text-lg m-0">Viso:</label><br>
                        <p1 class="text-xl"><strong class="total">{{number_format($total, 2)}}</strong></p1>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('message_success'))
            <div id="successMessage" class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @elseif ($message = Session::get('message_error'))
            <div id="successMessage1" class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div id="patikrink" class="alert-box hidden alert alert-danger">Blogas kiekio formatas</div>

            <div class="float-right">
                <a class="btn btn-primary" href="{{ url('/') }}" style="background-color: rgba(30,30,39, 0.9);">Grįžti į pradinį puslapį</a>
            </div>
        </div>
    </div>
</div>
@endsection