<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function show( string $id)
    {
        return view('systems');
    }
    //
}
