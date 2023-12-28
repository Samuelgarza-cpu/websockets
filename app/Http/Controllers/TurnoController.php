<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTurno;

class TurnoController extends Controller
{
    public function index(){
        $lista = [
            array("TURNO"=>"1","CAJA"=>"1"),
           
           
        ];
     event(new eventTurno(json_encode($lista)));
    
    }
}
