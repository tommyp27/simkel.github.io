<?php

namespace App\Http\Controllers;

use App\Models\Anggotakel;
use Illuminate\Http\Request;

class AnggotakelController extends Controller
{
    public function create($id)
    {
        $anggota = Anggotakel::with('namakk')->findorfail($id);

        return view('anggota.index', compact('anggota'));
    }
}