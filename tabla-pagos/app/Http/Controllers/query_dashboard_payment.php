<?php

namespace App\Http\Controllers;

use App\Models\query_BD_payment;
use Illuminate\Http\Request;

class query_dashboard_payment extends Controller
{
    public function index()
    {
        $datos = query_BD_payment::all();//Llamar al modelo que contiene la tabla a consultar
        return view('dashboard',compact('datos'));
    }
}
