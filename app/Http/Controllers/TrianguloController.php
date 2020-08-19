<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrianguloController extends Controller
{
    public function trianguloR()
    {
        return view('trianguloR');
    }

    public function solucion(Request $request)
    {
        $a = (float)$request->input('cateto_a');
        $b = (float)$request->input('cateto_b');

        $c = ($a * $a) + ($b * $b);
        
        $hipotenusa = sqrt($c);

        return view('solucion', [$hipotenusa]);
    }
}
