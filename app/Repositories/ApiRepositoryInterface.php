<?php

namespace App\Repositories;

use Illuminate\Support\Collection;

interface ApiRepositoryInterface
{
    public function fetchTickers(): Collection;
    public function fetchPairs(): Collection;
}
