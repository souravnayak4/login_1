<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadcontroller extends Controller
{
    public function blog(Request $req)
    {
        return $req->file('file');
    }  
}
