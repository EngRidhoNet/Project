<?php

namespace App\Services;

use App\Repositories\Cryptorepository;


class TickerService
{
    protected $cryptoRepository;

    public function __construct(Cryptorepository $cryptoRepository)
    {
        $this->cryptoRepository = $cryptoRepository;
    }

    public function getDoublyLinkedList(): array
    {
        return $this->cryptoRepository->getDataForView();
    }

}
