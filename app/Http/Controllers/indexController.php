<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        // $resIndo = Http::get('https://api.kawalcorona.com/indonesia/');
        $resIndo = Http::get('https://data.covid19.go.id/public/api/update.json');
        $dataIndo = $resIndo->json();
        // $dataTmbh = $resTambah->json();
        // dd($dataIndo);
        return view('index', compact('dataIndo'));
    }
}
