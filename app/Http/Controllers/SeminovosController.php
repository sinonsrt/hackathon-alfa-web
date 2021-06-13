<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Vehicle;

class SeminovosController extends Controller
{
    public function index()
    {
        return view('seminovos.index',
            [
                'veiculos' => Vehicle::addSelect(
                    [
                        'cor' => Color::select('cor')->whereColumn('id', 'Vehicles.cor_id'),
                        'marca' => Brand::select('marca')->whereColumn('id', 'Vehicles.marca_id')
                    ]
                )
                ->where('tipo', '=', 'Semi-novo')
                ->get()
            ]
        );
    }
}
