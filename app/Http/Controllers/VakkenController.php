<?php

namespace App\Http\Controllers;
use App\Models\Vakken;

use Illuminate\Http\Request;

class VakkenController extends Controller
{
    public function index()
    {
        $vakkens = Vakken::with('docenten')->get();
        // dd($vakkens);
        return view('vakkens.index', compact('vakkens'));
    }
}
