<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lelang;
use App\Models\HistoryLelang;

class Dashboard extends Controller
{
    //
    public function admin()
    {
        return view('dashboard.admin');
    }

    public function petugas()
    {
        return view('dashboard.petugas');
    }

    public function masyarakat(Lelang $lelang)
    {
        $lelangs = Lelang::all();
        return view('dashboard.masyarakat', compact('lelangs'));
    }
    public function profil()
    {
        return view('dashboard.profil');
    }
}
