<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        $Pizzas = Pizza::all();
        return view('welcome', compact('Pizzas'));
    }
}
