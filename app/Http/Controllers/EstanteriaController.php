<?php

namespace App\Http\Controllers;

use App\Models\Estanteria;
use Illuminate\Http\Request;

class EstanteriaController extends Controller
{
    /**
     * Muestra una lista de las estanterías.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estanterias = Estanteria::all();
        return view('estanterias.index', compact('estanterias'));
    }

    /**
     * Muestra el formulario para crear una nueva estantería.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estanterias.create');
    }

    /**
     * Almacena una nueva estantería en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
        ]);

        Estanteria::create($request->all());

        return redirect()->route('estanterias.index')->with('success', 'Estantería creada correctamente.');
    }

    // Otros métodos como show(), edit(), update(), destroy() según sea necesario.
}
