<?php

namespace App\Http\Controllers;

use App\Models\listlelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $listlelang = Listlelang::select('id', 'barangs_id', 'tanggal_lelang', 'status')
        ->get();

        // dd(Auth::user()->id);
        
        return view('listlelang.index', compact('listlelang'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $showlistlelang = listlelang::find($listlelang->id);
        return view('listlelang.show', compact('showlistlelang'));
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
