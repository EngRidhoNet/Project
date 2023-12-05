<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class Cryptorepository implements ApiRepositoryInterface
{
    public function fetchTickers(): Collection
    {
        $client = new Client();
        $tickersResponse = $client->request('GET', 'https://indodax.com/api/tickers');
        return collect(json_decode($tickersResponse->getBody(), true)['tickers']);
    }

    public function fetchPairs(): Collection
    {
        $client = new Client();
        $pairsResponse = $client->request('GET', 'https://indodax.com/api/pairs');
        return collect(json_decode($pairsResponse->getBody(), true));
    }

    public function getDataForView(): array
    {
        $tickers = $this->fetchTickers();
        $pairs = $this->fetchPairs()->toArray();
        $tickerDataArray = [];

        foreach ($tickers as $symbol => $ticker) {
            // Temukan pair spesifik dengan simbol saat ini
            $pair = array_filter($pairs, function ($item) use ($symbol) {
                return $item['ticker_id'] === strtolower($symbol);
            });

            // Periksa apakah pair ditemukan
            if (!empty($pair)) {
                $pair = reset($pair); // Ambil item pertama dari array yang difilter
                $ticker['url_logo'] = $pair['url_logo'];
            }

            // Lakukan operasi lain sesuai kebutuhan
            $tickerDataArray[] = ['symbol' => $symbol, 'ticker' => $ticker];
        }

        return $tickerDataArray;
    }
}
