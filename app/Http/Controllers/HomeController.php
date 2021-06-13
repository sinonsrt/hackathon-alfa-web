<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        foreach(Vehicle::all() as $veiculo) {
            echo $veiculo->modelo . "<br>";
        }
        exit;

        return view('home.index',
            [
                'veiculos' => Vehicle::all()
            ]
        );
    }
}
