<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Price;
use http\Env\Response;
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

    public function storePrice()
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

    }

    public function getPrice()
    {
        $prices = Price::getPrice();
        foreach ($prices as $price){
            $response[] = [
                'currency' => $price->key,
                'price' => $price->value
            ];
        }
        $response = json_decode(json_encode($response));
        return response()->json($response);
    }
}
