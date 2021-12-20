<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Illuminate\Support\Facades\Log;

class CoingekoController extends Controller
{
    public function loadExchanges() {
        $client = new CoinGeckoClient();
        $data = $client->derivatives()->getExchanges();
        dd($data);
        return 1;
    }
}
