<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        //return "Mensaje enviado desde cntrolador";
        return view ("index");
    }
}
