<?php

namespace App\Http\Controllers;

use App\Models\Anggotakel;
use App\Models\Namakk;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class DebugController extends Controller
{
    public function index()
    {
        $anggota = Anggotakel::find(2);
        dd($anggota);
    }
}