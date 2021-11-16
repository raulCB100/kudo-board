<?php

namespace App\Http\Controllers;

use App\Models\Kudo;
use Illuminate\Http\Request;

class KudoController extends Controller
{
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $success = false;
        $kudo = Kudo::create($request->post());
        $kudo ? $success = true : $success = false;
        return response()->json([
            'message' => $success ? 'Se creo un nuevo Kudo' : 'No se pudo crear el Kudo',
            'kudos' => Kudo::where('board_id',$request->board_id)->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kudo  $kudo
     * @return \Illuminate\Http\Response
     */
    public function show(Kudo $kudo)
    {
        // $kudos = Kudo::where('board_id',$kudo->id)->get();
        // dd($kudos);
        // return response()->json($board);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kudo  $kudo
     * @return \Illuminate\Http\Response
     */
    public function edit(Kudo $kudo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kudo  $kudo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kudo $kudo)
    {
        $success = false;
        $kudoBoard->fill($request->post())->save();
        $kudoBoard ? $success = true : $success = false;
        return response()->json([
            'message' => $success ? 'Se actualizo el KudoBoard' : 'No se pudo actualizar el KudoBoard',
            'boards' => Board::all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kudo  $kudo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kudo $kudo)
    {
        $success = false;
        $board->delete();
        $board ? $success = true : $success = false;
        return response()->json([
            'message' => $success ? 'Se elimino el KudoBoard' : 'No se pudo eliminar el KudoBoard',
            'kudoboards' => Board::all()
        ]);
    }
}
