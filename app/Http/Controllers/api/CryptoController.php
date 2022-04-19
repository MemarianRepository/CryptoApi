<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use App\Traits\CryptoTrait;

class CryptoController extends Controller
{

    public function checkApi(): array
    {
        $client = CryptoTrait::newClient();
        return $client->ping();
    }

    public function getPrice(): \Illuminate\Http\JsonResponse
    {
        $client = CryptoTrait::newClient();

        $ids = 'bitcoin,alter,altera,altera-social,altered-protocol,altered-state-token,alternatemoney,alt-estate,darenft,altrucoin-2';
        $data = $client->simple()->getPrice($ids, 'usd');

        foreach ($data as $key => $values) {
            $result = Price::checkPrice($key);
            if ($result == 'true') {
                foreach ($values as $value) {
                    Price::updatePrice($key, $value);
                }
            } else {
                foreach ($values as $value) {
                    Price::storePrice($key, $value);
                }
            }
        }

        return response()->json($data);
    }
}
