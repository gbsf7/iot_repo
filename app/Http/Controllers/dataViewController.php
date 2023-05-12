<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataViewController extends Controller
{
    public function dataview()
    {
        return view('pasien.dataview');
    }
}
