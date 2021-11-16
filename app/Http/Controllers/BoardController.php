<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Kudo;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kudoBoards = Board::all();

        return response()->json($kudoBoards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $success = false;
        $kudoBoard = KudoBoard::create($request->post());
        $kudoBoard ? $success = true : $success = false;
        return response()->json([
            'message' => $success ? 'Se creo un nuevo KudoBoard' : 'No se pudo crear el KudoBoard',
            'kudoboards' => KudoBoard::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
        $kudos = Kudo::where('board_id',$board->id)->get();
        // dd($kudos);
        $data = [
            'board'=>$board,
            'kudos'=>$kudos
        ];
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
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
     * @param  \App\Models\Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
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
