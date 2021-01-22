<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches = Coche::all();
        return \view('listadocoches')->with('coches', $coches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('insertarcoche');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $coche = Coche::create($request->all());
            return \redirect("/coche/$coche->id");
        }
        catch(\Exception $e) {
            return \redirect("/coche/create")->with("errorCreating", true);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {

        $coche;

        // Comprueba si se está pasando el parámetro ID. Sino, lo recoje de la request (Cuando se llama desde un formulario)
        if (!is_numeric($id)) {
            $id = $request['id'];
        }

        // Se busca el coche con el id querido
        $coche = Coche::find($id);

        // Se se ha encontrado algún coche, se devuelve la vista con la info. Sino de devuelve una con un error
        if (isset($coche->id)) {
            return view('coche')->with('coche', $coche);
        }
        else {
            return view('coche', ['error' => true, 'id' => $id]);
        }
    }

    public function search(Request $request) {
        return $request;
        // $coche = Coche::find($request['id']);
        // return view('coche')->with('coche', $coche);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coche = Coche::find($id);

        if (isset($coche->id)) {
            return view('editarcoche')->with('coche', $coche);
        }
        else {
            return view('editarcoche', ['error' => true, 'id' => $id]);
        }
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

        $updated = true;
        $coche;

        try {
            $coche = Coche::find($id);
            $coche->update($request->all());
        }
        catch(\Exception $e) {
            $updated = false;
        }

        return view("/coche", ['updated'=> $updated])->with('coche', $coche);//->with("updated", $updated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $deleted = true;

        try {
            $coche = Coche::find($id);
            $coche->delete();
        }
        catch(\Exception $e) {
            $deleted=false;
            return redirect('/')->with('not_deleted', $deleted);
        }

        return redirect('/')->with('deleted', $deleted);

    }
}
