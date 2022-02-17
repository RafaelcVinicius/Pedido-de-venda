<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{

    function index() {
        return view('pedido.index');
    }
    function cadastro() {

        return view('pedido.cadastro');
    }
}
