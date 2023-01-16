<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prekes;

class Kategorijos extends Model
{
    use HasFactory;

    protected $fillable = [
        'pavadinimas',
    ];

    public function prekes() {
        return $this->hasMany(Prekes::class, 'id', 'kategorijos_id');
    }
}
