<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashMovementController extends Controller
{
    public function index() 
    {
        return view('cash_movement.cash_movement');
    }

    public function buy() 
    {
        return view('cash_movement.buy');
    }

    public function sell()
    {
        return view('cash_movement.sell');
    }
}
