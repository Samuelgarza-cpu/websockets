<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\eventTurno;

class TurnoController extends Controller
{
    public function index(){
        event(new eventTurno);
    }
}
