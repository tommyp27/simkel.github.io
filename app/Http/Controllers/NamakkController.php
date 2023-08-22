<?php

namespace App\Http\Controllers;

use App\Models\Namakk;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class NamakkController extends Controller
{
    public function index()
    {

        $keluarga = Namakk::with('penduduk')->paginate(717);
        return view('namakk.index', compact('keluarga'));
    }

    public function create()
    {
        $penduduk = Penduduk::all();
        return view('namakk.create', compact('penduduk'));
    }


    public function store(Request $request)
    {

        Namakk::create($request->all());

        return redirect('namakk')->with('success','Data Suskes di Simpan.');
    }


    public function detail($id)
        {
            $kk = Namakk::with('penduduk')->findorfail($id);
            return view('namakk.detail', compact('kk'));

        }


}