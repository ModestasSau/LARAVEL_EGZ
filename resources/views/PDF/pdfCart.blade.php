<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prekių krepšelis</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div style="width: 700px; margin-top: 50px; margin-left:auto; margin-right:auto; margin-bottom: 50px;">

        <div id="identity">
                <textarea style="display: inline-block; width: 500px" id="customer-title">RIESTAINIS</textarea>
                    <textarea class="margin: 30px" id="address">
Riestainis
Egzamino projektas
PDF failo generavimas
                    </textarea>
            </div>
            <div style="clear:both"></div>
            <div style="float:left;">
                <table>
                    <tr>
                        <td colspan="2">Prekiu krepšelis</td>
                    </tr>
                    <tr>
                        <td >Sukurimo data:</td>
                        <td>{{ now()->format('Y-m-d') }}</td>
                    </tr>
                </table>

            </div>

            <table id="items">

                <tr>
                    <th style="width: 30px; border-bottom: 2px solid black">Nr</th>
                    <th style="border-bottom: 2px solid black">Pavadinimas</th>
                    <th style="border-bottom: 2px solid black">Aprašymas</th>
                    <th style="border-bottom: 2px solid black">kaina</th>
                    <th style="border-bottom: 2px solid black">Kiekis</th>
                    <th style="border-bottom: 2px solid black">Suma</th>
                </tr>
                <?php
                $total = 0;
                $count = 1;
                ?>
                @forelse($prekes as $preke)
                <?php
                $total += number_format(($preke['prekes']['kaina'] * $preke['kiekis']), 2);
                ?>
                <tr>
                    <td style="border: 1px solid black; text-align:center">{{$count}}</td>
                    <td style="border: 1px solid black; text-align:center">{{ $preke['prekes']['pavadinimas'] }}</td>
                    <td style="border: 1px solid black; text-align:center">{{ $preke['prekes']['aprasymas'] }}</td>
                    <td style="border: 1px solid black; text-align:center">{{ number_format($preke['prekes']['kaina'], 2) }} Eur</td>
                    <td style="border: 1px solid black; text-align:center">{{ $preke['kiekis'] }}</td>
                    <td style="border: 1px solid black; text-align:center">{{ number_format(($preke['prekes']['kaina']*$preke['kiekis']), 2) }}</td>
                </tr>
                <?php
                $count++;
                ?>
                @empty
                <tr>
                    <td colspan="6" style="text-align:center">Prekiu nera.</td>
                </tr>
                @endforelse
                <tr style="border:none">
                    <td colspan="4" style="border:none"></td>
                    <td colspan="1" style="border:none; text-align:right"><strong>Viso:</strong></td>
                    <td style="border:none">
                        <div id="total" style="border:none;">{{number_format($total, 2)}} Eur</div>
                    </td>
                </tr>
            </table>
            <div style="display:block; height: 50px">
            </div>
            <div id="terms">
                <h5>INFO</h5>
                <textarea>Tai yra prekiu krepšelio kopija.</textarea>
            </div>

        </div>

</body>

</html>