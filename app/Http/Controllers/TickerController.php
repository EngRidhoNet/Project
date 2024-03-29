<?php

namespace App\Http\Controllers;

use App\Services\TickerService;

class TickerController extends Controller
{
    protected $tickerService;

    public function __construct(TickerService $tickerService)
    {
        $this->tickerService = $tickerService;
    }
    public function showTicker()
    {
        // Mendapatkan doubly linked list dari TickerService
        $doublyLinkedList = $this->tickerService->getDoublyLinkedList();
        return view('ticker', ['doublyLinkedList' => $doublyLinkedList]);
    }
}
