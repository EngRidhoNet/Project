<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
   class Ticker extends Model
   {
       use HasFactory;

       protected $fillable = [
           'symbol',
           'high',
           'low',
           'last',
           'buy',
           'sell',
           'server_time',
       ];

       protected $casts = [
           'high' => 'float',
           'low' => 'float',
           'last' => 'float',
           'buy' => 'float',
           'sell' => 'float',
           'server_time' => 'integer',
       ];
   }
