<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bid;
class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Bid =bid::all();
        return view('Lelang',['data_bid'=>$Bid,'data_barang'=>$Barang]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bid');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        bid::create([
            'Nama'=>$request->Nama,
            'id_gambar'=>$request->id_gambar,
            'Bid'=>$request->Bid,
            'No_telphone'=>$request->No_telphone,
            
        ]);
        //echo "Data berhasil di simpan";
        return redirect('/Lelang')->with('status','Data Berhasil Di Simpan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         bid::destroy($id);
        return redirect('Barang')->with('status','Data Berhasil Di Delete');
    }
}
