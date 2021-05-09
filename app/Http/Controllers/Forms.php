<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Forms extends Controller
{
    public function postForm()
    {
      return view("form");
    }

    public function postIt(Request $request){
      return $request->text;
    }
}
