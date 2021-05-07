<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Example extends Controller
{
    function lookUp($author){
      //return "Life is short, the birds are flying ". ' - '. $author;
      //return view('example');
      return view('example',['author' => $author]);
    }
}
