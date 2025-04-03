<?php

namespace App\Http\Controllers;
use App\Models\Docenten;

use Illuminate\Http\Request;

class DocentenController extends Controller
{
    public function index()
    {
        $docentens = Docenten::with('vakken')->get();
        // dd($docentens);
        return view('docentens.index', compact('docentens'));
    }
}
