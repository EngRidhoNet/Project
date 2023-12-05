<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TickerService;
class HomeController extends Controller
{
    protected $tickerService;

    public function __construct(TickerService $tickerService)
    {
        $this->tickerService = $tickerService;
    }
    public function index()
    {
        $doublyLinkedList = $this->tickerService->getDoublyLinkedList();
        return view('pages.home', ['doublyLinkedList' => $doublyLinkedList]);
    }
}
