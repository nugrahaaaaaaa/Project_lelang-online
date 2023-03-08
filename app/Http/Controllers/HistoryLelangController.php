<?php

namespace App\Http\Controllers;

use App\Models\HistoryLelang;
use Illuminate\Http\Request;
use App\Models\Lelang;
use Illuminate\Support\Facades\Auth;

class HistoryLelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function cetakLaporan()
    {
        $historylelang = HistoryLelang::all();
        return view('lelang.cetaklelang', compact('historylelang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(HistoryLelang $historylelang, Lelang $lelang)
    {
        //
        $lelangs = Lelang::find($lelang->id);
        $historylelangs = HistoryLelang::orderBy('harga', 'desc')->get()->where('lelang_id', $lelang->id);
        return view('masyarakat.penawaran', compact('lelangs', 'historylelangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Lelang $lelang)
    {
        //
        $request->validate([
            'harga_penawaran' => 'required|numeric'
        ],[
            'harga_penawaran.required' => "Harus diisi",
            'harga_penawaran.numeric' => "Harus angka",
        ]);

        $historyLelang = new Historylelang();
        $historyLelang->lelang_id = $lelang->id;
        $historyLelang->users_id = Auth::user()->id;
        $historyLelang->harga = $request->harga_penawaran;
        $historyLelang->status = 'pending' ;
        $historyLelang->save();

        return redirect()->route('tawar', $lelang->id);
    }

    public function pilihPemenang(Lelang $lelang, $id)
    {
        //mengambil data sesuai id
        $historylelang = HistoryLelang::findOrFail($id);

        //mengubah status pada history menjadi "pemenang"
        $historylelang->status = 'pemenang';
        $historylelang->save();

        //ambil data berdasarkan history lelang
        $lelang =$historylelang->lelang;

        //mengubah status lelang menjadi ditutup
        $lelang->status = 'ditutup';
        $lelang->pemenang = $historylelang->user->name;
        $lelang->harga_akhir = $historylelang->harga;
        $lelang->save();

        return redirect()->route('lelang.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HistoryLelang  $historyLelang
     * @return \Illuminate\Http\Response
     */
    public function datapenawaran(HistoryLelang $historyLelang)
    {
        //
        $historylelangs = HistoryLelang::all();
        return view('masyarakat.data-penawaran', compact('historylelangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HistoryLelang  $historyLelang
     * @return \Illuminate\Http\Response
     */
    public function edit(HistoryLelang $historyLelang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HistoryLelang  $historyLelang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoryLelang $historyLelang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HistoryLelang  $historyLelang
     * @return \Illuminate\Http\Response
     */
    public function destroy(HistoryLelang $historyLelang)
    {
        //
    }
}
