<?php

namespace App\Http\Controllers;

use App\Models\Namakk;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            $jlh = Penduduk::count();
            $jlh_kk = Namakk::count();
            return view('home.index', compact('jlh','jlh_kk'));
        }
        else
        {
            return view('dashboard');
        }
    }
}