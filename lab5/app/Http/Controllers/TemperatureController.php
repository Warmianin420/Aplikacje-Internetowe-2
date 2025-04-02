<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function ctf(float $c)
    {
        $wynik = $c*9/5 + 32;
        dd($c);
        return $wynik;
    }
}
