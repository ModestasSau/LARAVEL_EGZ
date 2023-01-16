<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Prekes;

class Cart extends Model
{
    use HasFactory;

    public static function krepselioPrekes() {
        $krepselioPrekes = Cart::with(['prekes' => function ($query) {
            $query->select('id', 'kategorijos_id', 'pavadinimas', 'aprasymas', 'kaina', 'kiekis', 'paveikslelis');
        }])->orderBy('id', 'desc')->where('user_id', Auth::user()->id)->get()->toArray();
        return $krepselioPrekes;
    }

    public function prekes(){
        return $this->belongsTo(Prekes::class, 'prekes_id', 'id');
    }
}
