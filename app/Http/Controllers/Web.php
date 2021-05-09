<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Web extends Controller
{
    public function initSite()
    {
        $data['title'] = 'EgeMoss';
        $data['exp'] = 'Surround yourself with the nature!';
        $data['welcome'] = 'Welcome the Egemoss world!';
        return view('web',$data);
    }
}
