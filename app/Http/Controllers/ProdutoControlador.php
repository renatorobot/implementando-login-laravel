<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        echo "<h4>LISTA DE PRODUTOS</h4>";
        echo "<ul>";
            echo "<li>Macarrão</li>";
            echo "<li>Feijão</li>";
            echo "<li>Carne Boviva</li>";
            echo "<li>Arroz</li>";
            echo "<li>Leite</li>";
        echo "</ul>";
    }
}