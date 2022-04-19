<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public static function checkPrice($key): string
    {
        $price = Price::query()->where('key', $key)->first();
        if ($price){
            return 'true';
        }else{
            return 'false';
        }
    }
    public static function storePrice($key, $value)
    {
        $price = new self();
        $price->key = $key;
        $price->value = $value;
        $price->save();
    }
    public static function updatePrice($key, $value)
    {
        $price = Price::query()->where('key', $key)->first();
        $price->key = $key;
        $price->value = $value;
        $price->save();
    }
}
