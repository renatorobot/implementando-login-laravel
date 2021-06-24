<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    public function index(){

        echo "<h4>LISTA DE CATEGORIAS</h4>";
        echo "<ul>";
            echo "<li>Alimentos</li>";
            echo "<li>Eletronicos</li>";
            echo "<li>Móveis</li>";
            echo "<li>Informática</li>";
            echo "<li>Celulares</li>";
            echo "<hr>";
        echo "</ul>";

        if(Auth::check()){
            $user = Auth::user();
            echo "<h4>VC está logado!!</h4>";
            echo "<p>".$user->name."</p>";
            echo "<p>".$user->email."</p>";
            echo "<p>".$user->id."</p>";
        }else{
            echo "VC não está logado!";
        }
        

    }
}
