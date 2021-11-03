<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class provinsiController extends Controller
{
    public function index()
    {
        $resProv = Http::get('data.covid19.go.id/public/api/prov.json');
        $dataProv= $resProv->json();

        return view('provinsi', compact('dataProv'));
        // dd($dataProv);
    }
}
