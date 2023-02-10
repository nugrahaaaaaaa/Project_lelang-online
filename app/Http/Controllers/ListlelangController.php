<?php

namespace App\Http\Controllers;

use App\Models\listlelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;

class ListlelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listlelang = Listlelang::select('id', 'barangs_id', 'tanggal_lelang', 'harga_akhir', 'status')
        ->where([
            'status' => 'dibuka',
            ])
        ->get();
        // dd(Auth::user()->id);
        return view('lelang.index', compact('listlelangs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barangs = Barang::select('id', 'nama_barang', 'harga_awal')
        ->whereNotIn('id', function($query)
            { 
                $query->select('barangs_id')->from('lelangs');
            }
        )->get();
return view('lelang.create', compact('barangs'));
}
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'barangs_id'         => 'required|exists:barangs,id|unique:lelangs,barangs_id',
                'tanggal_lelang'    => 'required|date',
                'harga_akhir'       => 'required|numeric',
            ],
            [
                'barang_id.required'        => 'Barang Harus Diisi',
                'barang_id.exists'          => 'Barang Tidak Ada Pada Data Barang',
                'barang_id.unique'          => 'Barang Sudah Di Lelang',
                'tanggal_lelang.required'   => 'Tanggal Lelang Harus Diisi',
                'tanggal_lelang.date'       => 'Tanggal Lelang Harus Berupa Tanggal',
                'harga_akhir.required'      => 'Harga Akhir Harus Diisi',
                'harga_akhir.numeric'       => 'Harga Akhir Harus Berupa Angka',
            ]
        );
        $lelang = new Lelang;
        $lelang->barangs_id = $request->barangs_id;
        $lelang->tanggal_lelang = $request->tanggal_lelang;
        $lelang->harga_akhir = $request->harga_akhir;
        $lelang->users_id = Auth::user()->id;
        $lelang->status = 'dibuka';
        $lelang->save();

        return redirect()->route('listlelang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\listlelang  $listlelang
     * @return \Illuminate\Http\Response
     */
    public function show(listlelang $listlelang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\listlelang  $listlelang
     * @return \Illuminate\Http\Response
     */
    public function edit(listlelang $listlelang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\listlelang  $listlelang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, listlelang $listlelang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\listlelang  $listlelang
     * @return \Illuminate\Http\Response
     */
    public function destroy(listlelang $listlelang)
    {
        //
    }
}
