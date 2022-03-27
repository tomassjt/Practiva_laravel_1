<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
class IndexController extends Controller
{
    public function index(){
        //return "Mensaje enviado desde cntrolador";
        return view ("index");
    }

    public function Mostrar(){
        //return "Mensaje enviado desde cntrolador";
        $productos = productos::paginate();
        return view ("mostrarProductos",compact('productos'));
        
        
    }

    public function Agregar(){
        return view ("AgregarProductos");
    }

    public function InsertarProductos(request $Request){
        $productos = new productos();
        $productos->nombre = $Request->nombre;
        $productos->descripcion = $Request->descripcion;
        $productos->nombre = $Request->nombre;
        $productos->categoria = $Request->categoria;
        $productos->precioCompra = $Request->precioCompra;
        $productos->precioVenta = $Request->precioVenta;
        $productos->stock = $Request->stock;
        $productos->save();
        $productos = productos::paginate();
        return view ("mostrarProductos",compact('productos'));
    }
}
