<?php

namespace App\Http\Controllers;

use App\Models\Ticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\BinaryTree;
use GuzzleHttp\Client;

class TickerController extends Controller
{
    public function storeTickerData()
    {
        $response = Http::get('https://indodax.com/api/tickers');

        if ($response->ok()) {
            $tickers = $response->json()['tickers'];

            foreach ($tickers as $symbol => $data) {
                Ticker::updateOrCreate(['symbol' => $symbol], $data);
            }

            return response()->json(['message' => 'Ticker data stored successfully']);
        }

        return response()->json(['message' => 'Failed to fetch ticker data'], 500);
    }

    public function fetchDataFromApi()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://indodax.com/api/tickers');

        $tickers = json_decode($response->getBody(), true)['tickers'];
        $binaryTree = new BinaryTree("btc_idr", [
            "high" => "555000000",
            "low" => "544000000",
            "vol_btc" => "31.51363292",
            "vol_idr" => "17360070285",
            "last" => "548587000",
            "buy" => "548435000",
            "sell" => "548582000",
            "server_time" => 1699237697
        ]);

        foreach ($tickers as $symbol => $ticker) {
            $binaryTree->insert($symbol, $ticker);
        }

        // Display data in blade or perform other operations
        return view('ticker', ['binaryTree' => $binaryTree]);
    }
    // public function showTicker()
    // {
    //     $client = new Client();
    //     $response = $client->request('GET', 'https://indodax.com/api/tickers');
    //     $tickers = json_decode($response->getBody(), true)['tickers'];
    //     $binaryTree = new BinaryTree("btc_idr", [
    //         "high" => "555000000",
    //         "low" => "544000000",
    //         "vol_btc" => "31.51363292",
    //         "vol_idr" => "17360070285",
    //         "last" => "548587000",
    //         "buy" => "548435000",
    //         "sell" => "548582000",
    //         "server_time" => 1699237697
    //     ]);

    //     foreach ($tickers as $symbol => $ticker) {
    //         $binaryTree->insert($symbol, $ticker);
    //     }

    //     return view('ticker', ['binaryTree' => $binaryTree]);
    // }
    public function showTicker()
    {
        $client = new Client();

        // Fetch tickers data from API
        $tickersResponse = $client->request('GET', 'https://indodax.com/api/tickers');
        $tickers = json_decode($tickersResponse->getBody(), true)['tickers'];

        // Fetch pairs data from API
        $pairsResponse = $client->request('GET', 'https://indodax.com/api/pairs');
        $pairs = json_decode($pairsResponse->getBody(), true);

        $binaryTree = new BinaryTree("btc_idr", [
            "high" => "555000000",
            "low" => "544000000",
            "vol_btc" => "31.51363292",
            "vol_idr" => "17360070285",
            "last" => "548587000",
            "buy" => "548435000",
            "sell" => "548582000",
            "server_time" => 1699237697
        ]);

        foreach ($tickers as $symbol => $ticker) {
            // Find the specific pair with the current symbol
            $pair = array_filter($pairs, function ($item) use ($symbol) {
                return $item['ticker_id'] === strtolower($symbol);
            });

            // Check if the pair is found
            if (!empty($pair)) {
                $pair = reset($pair); // Get the first item from the filtered array
                $ticker['url_logo'] = $pair['url_logo'];
            }

            $binaryTree->insert($symbol, $ticker);
        }

        return view('ticker', ['binaryTree' => $binaryTree]);
    }
}
