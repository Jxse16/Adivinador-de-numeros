<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GameController as ControllersGameController;
use App\Models\Game;
use Illuminate\Http\Request;
 
class GameController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('index',['games'=> $games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function comprobar(int $numUser,int $numCpu) : array
    {
        $resultado = [];
        if ($numUser == $numCpu)
        {
            $resultado[0] = "Win";
        } else 
        {
            if ($numUser < $numCpu)
            {
                $resultado[0] = "El número a adivinar es mayor";
                $diferencia = $numCpu - $numUser;
                if ($diferencia < 15) $resultado[1] = "El número a adivinar está cerca";
            } else
            {
                $resultado[0] = "El número a adivinar es menor";
                $diferencia = $numUser - $numCpu;
                if ($diferencia < 15) $resultado[1] = "El número a adivinar está cerca";
            }
        }

        return $resultado;
    }
    public function game(Request $request){
        $numIntentos = $request->numIntentos;
        $numCpu = $request->numCpu;
        $numIntentos++;

        if ($numCpu == 0) $numCpu = rand(1,100);
        $resultado = self::comprobar($request->num,$numCpu);

        if ($resultado[0] == 'Win' ){
            Game::create([ 
                
                "tries" => $numIntentos,
                "machine_choice" => $numCpu
            ]);
            return view( 'win',
            [
            "numIntentos" =>  $numIntentos
            ]);
        }

        return  response(
            view('result',
            ["numCpu" => $numCpu,
             "numUser" => $request->num,
             "result" => $resultado,
             "numIntentos" => $numIntentos
        ]));

    }
     public function elige(Request $request)
    {
        $numIntentos = 0;
        $numCpu = 0;
        if ($request->numIntentos) $numIntentos = $request->numIntentos;
        if ($request->numCpu) $numCpu = $request->numCpu;
        return view('game',["numCpu" => $numCpu, "numIntentos"=> $numIntentos]);
    }


}
