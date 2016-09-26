<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Game;
use DB;

class FilmsController extends Controller
{
    public function index(){
      $films = Game::all();

      return view('films.index', compact('films'));
    }

    public function show($id){
      $game = Game::find($id);
      return view('films.show', compact('game'));
      //return $game;
    }
}
