<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class amiiboController extends Controller
{
    public function llamarAmiibos(){
        $response = Http::get("https://www.amiiboapi.com/api/amiibo/");
        $amiibos = $response->json()['amiibo'];
        //dd($amiibos);

        //mandamos los amiibos compactados al front end
        return view('amiibo', compact('amiibos'));
    }
}
