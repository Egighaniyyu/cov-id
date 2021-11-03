<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class rsController extends Controller
{
    public function index()
    {
        $resRS = Http::get('https://dekontaminasi.com/api/id/covid19/hospitals');
        $dataRS = $resRS->json();

        return view('rs', compact('dataRS'));
    }
}
