<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use App\Models\Vehicle;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index',
            [
                'veiculos' => Vehicle::addSelect(
                    [
                        'cor' => Color::select('cor')->whereColumn('id', 'Vehicles.cor_id'),
                        'marca' => Brand::select('marca')->whereColumn('id', 'Vehicles.marca_id')
                    ]
                )->get()
            ]
        );
    }
}
