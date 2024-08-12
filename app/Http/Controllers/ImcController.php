<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function showForm()
    {
        return view('imc-form');
    }

    public function calculateImc(Request $request)
    {
        $request->validate([
            'height' => 'required|numeric|min:0.01',
            'weight' => 'required|numeric|min:0',
        ]);

        $height = $request->input('height');
        $weight = $request->input('weight');

        if ($height <= 0) {
            return redirect()->back()->withErrors(['height' => 'Altura deve ser maior que zero.']);
        }

        $imc = $weight / ($height * $height);
        $classification = $this->getImcClassification($imc);

        return view('imc-result', ['imc' => $imc, 'classification' => $classification]);
    }

    private function getImcClassification($imc)
    {
        if ($imc < 18.5) {
            return 'Abaixo do peso';
        } elseif ($imc < 24.9) {
            return 'Peso normal';
        } elseif ($imc < 29.9) {
            return 'Sobrepeso';
        } else {
            return 'Obesidade';
        }
    }
}
