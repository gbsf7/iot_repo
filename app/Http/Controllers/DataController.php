<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function dataview()
    {
        return view('pasien.dataview');
    }
}
