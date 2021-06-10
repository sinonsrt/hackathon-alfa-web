<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeminovosController extends Controller
{
    public function index()
    {
        return view('seminovos.index');
    }
}
