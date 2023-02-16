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
        $permintaan=$request->validate([
            'nama_barang'=>'required',
            'tanggal'=>'required',
            'harga_awal'=>'required',
            'image'=>'image|file',
            'deskripsi'=>'required',
        ]);
        if ($request->file('image')) {
            $permintaan['image'] = $request->file('image')->store('post-images');
        }

        // $query = DB::table('barangs')->insert([
        //     "nama_barang"=>$request["nama_barang"],
        //     "tanggal"=>$request["tanggal"],
        //     "harga_awal"=>$request["harga_awal"],
        //     "image"=>$request["image"],
        //     "deskripsi"=>$request["deskripsi"],
        // ]);

        barang::create($permintaan);
        
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
        $barangs = Barang::find($barang->id);
        return view('barang.edit', compact('barangs'));
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
            'image' => 'image|file|max:10024',
            'deskripsi' => 'required',
           
        ]);

        $barang = barang::find($barang->id);
        $barang->nama_barang = $request->nama_barang;
        $barang->tanggal = $request->tanggal;
        $barang->harga_awal = $request->Harga_awal;
        $barang->image = $request->image;
        $barang->deskripsi = $request->deskripsi;
        $barang->update();

        if($request->file('image')){
            $permintaan['image'] - $request->file('image')->store('post-images');
        }
        barang::create($permintaan);

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
