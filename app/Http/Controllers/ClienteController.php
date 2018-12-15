<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function getCliente()
    {
        return Cliente::where('user_id', '=', 1)->get();
    }
}
