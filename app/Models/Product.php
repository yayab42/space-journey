<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    public function fullPrice () {
        $price_ht = $this->price_ht;
        $vat = $this->vat;
        $price = $price_ht + ($price_ht * $vat) / 100;

        return $price;
    }

}


