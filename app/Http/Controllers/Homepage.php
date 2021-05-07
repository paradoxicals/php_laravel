<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage extends Controller
{
  public function initSite()
  {
      $data['title'] = 'SD';
      $data['welcome'] = 'Welcome the our side!';
      return view('homepage',$data);
  }
}
