<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;
use App\Models\bid;
class UploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Barang =upload::all();
        $Bid =bid::all();
        $Bid =bid::orderBy('Bid', 'Desc')->get();
        return view('Barang',['data_bid'=>$Bid],['data_barang'=>$Barang]);
        
    }
    public function indexa()
    {
        $Barang =upload::all();
        $Bid =bid::all();
        $Bid =bid::orderBy('Bid', 'Desc')->get();
        return view('Lelang',['data_bid'=>$Bid],['data_barang'=>$Barang]);
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
            $nm = $request->gambar;
            $namaFile = $nm->getClientOriginalname();
            $dtupload = new upload;
            $dtupload->Nama=$request->Nama;
            $dtupload->gambar=$namaFile;
            $dtupload->deskripsi=$request->deskripsi;
            $dtupload->OB=$request->OB;
            $dtupload->waktu=$request->waktu;
            $nm->move(public_path().'/img',$namaFile);
            $dtupload->save();
        
        return redirect('Barang')->with('status','Data Berhasil Di Simpan!!');
    }
    public function stores(Request $request)
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
        return view('edit',['Barang'=>upload::FindOrFail($id)]);
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
       upload::where('id',$id)
                    ->update(['Nama'=>$request->Nama,
                              'deskripsi'=>$request->deskripsi,
                              'OB'=>$request->OB,
                              'waktu'=>$request->waktu,
                              
                            ]);

        return redirect('Barang')->with('status','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        upload::destroy($id);
        return redirect('Barang')->with('status','Data Berhasil Di Delete');
    }
}
