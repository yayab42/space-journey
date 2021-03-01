<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    public function getPriceWithVatAttribute()
    {
        return $this->price_ht + ($this->price_ht * $this->vat) / 100;
    }
}


