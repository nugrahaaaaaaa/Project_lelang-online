<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');
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
        $request->validate([
            'nama_barang'=>'required',
            'tanggal'=>'required',
            'harga_awal'=>'required',
            'deskripsi'=>'required'
        ]);

        $query = DB::table('barangs')->insert([
            "nama_barang"=>$request["nama_barang"],
            "tanggal"=>$request["tanggal"],
            "harga_awal"=>$request["harga_awal"],
            "deskripsi"=>$request["deskripsi"]
        ]);
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
        $showbarang = barang::find($barang->id);
        return view('barang.show', compact('showbarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        //
        $editbarang = barang::all();
        return view('barang.edit', compact('editbarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        //
        $request->validate([
            'nama_barang' => 'required',
            'tanggal' => 'required',
            'harga_awal' => 'required',
            'deskripsi' => 'required',
        ]);

         $query = DB::table('barang')
        ->where('id',$barangs->id)
        ->update([
            "nama_barang" => $request["nama_barang"],
            "tanggal"  => $request["tanggal"],
            "harga_awal"  => $request["harga_awal"],
            "deskripsi"  => $request["deskripsi"],
        ]);
        return redirect ('/barang');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barang)
    {
        //
        $query = DB::table('barangs')->where('id',$barang->id)->delete();
        return redirect('/barang');
    }
}
