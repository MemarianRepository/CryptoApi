<?php

namespace App\Traits;

use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Illuminate\Http\Request;

trait CryptoTrait
{
    public static function newClient(): CoinGeckoClient
    {
        return new CoinGeckoClient();
    }

}

