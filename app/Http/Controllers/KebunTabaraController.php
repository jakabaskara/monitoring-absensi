<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KebunTabaraController extends Controller
{
    public function kebun_tabara()
    {
        $response = Http::get('https://api.fingerspot.io/api/download/attendance_log/C262B8950323192C/2024-02-06/6/emp_nik/desc/json/8f2cf595e66939f6cecc14ec3388926d/20240207040900');
        $absensi = $response->json();
        return view('kebun_tabara', ['absensi' => $absensi]);
    }
}
