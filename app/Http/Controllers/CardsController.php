<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Card;

class CardsController extends Controller
{
    public function index(){

        $card = Card::all();
        //$card = DB::table('cards')->get();
        return view('cards.index', compact('card'));
    }

    public function show(Card $card){
        //$card = Card::find($id);
        return view('cards.show', compact('card'));
    }
}
