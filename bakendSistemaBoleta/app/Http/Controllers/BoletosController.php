<?php

namespace App\Http\Controllers;
use App\Http\Requests\GuardarBoletos;
use App\Models\API\boletos;
use Illuminate\Http\Request;

class BoletosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return boletos::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarBoletos $request)
    {
        boletos::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'los boletos se guardo corretamente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\API\boletos  $boletos
     * @return \Illuminate\Http\Response
     */
    public function show(boletos $boletos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\API\boletos  $boletos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, boletos $boletos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\API\boletos  $boletos
     * @return \Illuminate\Http\Response
     */
    public function destroy(boletos $boletos)
    {
        //
    }
}
