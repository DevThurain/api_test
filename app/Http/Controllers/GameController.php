<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index(){
        $games = Game::all();

        return view('game',['games' => $games]);
    }

    public function allGames(){
        return Game::all();
    }
}
