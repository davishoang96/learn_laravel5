<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function page(){
      $people = ['John','Davis','Sarah','Anna'];
      return view('people.index', compact("people"));
    }
}
