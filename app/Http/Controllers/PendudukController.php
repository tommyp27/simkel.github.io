<?php

namespace App\Http\Controllers;
use App\Models\Namakk;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{

        public function index()
        {

            $penduduk = Penduduk::all();
            return view('penduduk.index', compact('penduduk'));
        }

        public function addpddk()
        {
            return view('penduduk.addpddk');
        }

        public function store(Request $request)
        {

            Penduduk::create($request->all());

            return redirect('penduduk')->with('success','Data Suskes di Simpan.');
        }
    }