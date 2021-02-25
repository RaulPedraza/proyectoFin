<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::all();
        $user = Auth::id();
        return view('main', ['platos' => $platos, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::id();
        return view('nuevoPlato', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = pathinfo($_FILES['imagen']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newname = request('nombre').".".$ext;

        $target = 'images/'.$newname;
        move_uploaded_file( $_FILES['imagen']['tmp_name'], $target);

        $plato = new Plato();

        $plato->nombre = request('nombre');
        $plato->desc_pequeña = request('desc_pequeña');
        $plato->description = request('descripcion');
        $plato->tipo_plato = request('tipo_plato');
        $plato->tipo_comida = request('tipo_comida');

        //Subir imagen
        $info = pathinfo($_FILES['imagen']['name']);
        $ext = $info['extension']; // get the extension of the file
        $newname = request('nombre').".".$ext;

        $target = 'images/'.$newname;
        move_uploaded_file( $_FILES['imagen']['tmp_name'], $target);

        $plato->ruta_imagen = $target;
        $plato->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plato = Plato::find($id);
        $user = Auth::id();
        return view('plato', ['plato' => $plato, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plato = Plato::find($id);
        $plato->delete();

        return redirect('/');
    }
}
