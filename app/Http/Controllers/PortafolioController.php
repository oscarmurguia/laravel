<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index(){
      $portafolio = [
        ['title' => 'Proyecto 1'],
        ['title' => 'Proyecto 2'],
        ['title' => 'Proyecto 3'],
        ['title' => 'Proyecto 4'],
        ['title' => 'Proyecto 5'],
      ];
      return view ('portafolio',compact('portafolio')); //Estes es un ejemplo 04-09-2019
    }
}
