<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagoController extends Controller
{
    public function index()
    {
        return view('payment-method.index');
    }
}
