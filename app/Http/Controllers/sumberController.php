<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class sumberController extends Controller
{
    public function index()
    {
        $resSumber = Http::get('https://dekontaminasi.com/api/id/covid19/hospitals');
        $dataSumber = $resSumber->json();

        return view('sumber', compact('dataSumber'));
    }
}
