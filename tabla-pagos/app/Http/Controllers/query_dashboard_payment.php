<?php

namespace App\Http\Controllers;

use App\Models\query_BD_payment;
use Illuminate\Http\Request;

class query_dashboard_payment extends Controller
{
    public function index()
    {
    //$datos = query_BD_payment::all();
      $datos = query_BD_payment:: orderBy('FechaPago','asc')->get();
      return view('dashboard',compact('datos'));
    }

}

