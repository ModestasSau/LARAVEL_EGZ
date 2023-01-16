<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategorijos;

class Prekes extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategorijos_id', 'pavadinimas', 'aprasymas', 'kaina', 'kiekis','paveikslelis',
    ];

    public function kategorija()
    {
        return $this->belongsTo(Kategorijos::class, 'kategorijos_id', 'id');
    }
}
