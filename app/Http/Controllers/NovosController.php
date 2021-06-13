<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class NovosController extends Controller
{
    public function index()
    {
        return view('novos.index',
            [
                'veiculos' => Vehicle::addSelect(
                    [
                        'cor' => Color::select('cor')->whereColumn('id', 'Vehicles.cor_id'),
                        'marca' => Brand::select('marca')->whereColumn('id', 'Vehicles.marca_id')
                    ]
                )
                ->where('tipo', '=', 'Novo')
                ->get()
            ]
        );
    }
}
