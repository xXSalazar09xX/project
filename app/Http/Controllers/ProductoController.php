<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\categoria;
use App\Models\producto;

class ProductoController extends Controller
{
    public function index(){
        $categorias=categoria::all();
        return view('welcome',compact("categorias"));
    }
    public function store(Request $request)
    {
        // Crear una nueva instancia de libros
        $datos = new producto();
        // Asignar valores desde la solicitud (formulario)
        $datos->nombre= $request->nombre;
        $datos->fechadevencimiento = $request->fecha;
        $datos->precio_venta = $request->precio;
        $datos->stock = $request->stock;
        $datos->id_categoria = $request->id_categoria;

        $datos->estado = true; // Establecer estado como activo
       
        // Guardar el nuevo libro en la base de datos
        $datos->save();

        // Redirigir de nuevo a la página anterior
        return back();
  
    }
}
