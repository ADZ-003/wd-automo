<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class Barangcontrol extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang',compact('barangs'));
    }

    public function create()
    {
        return view('c_barang');
    }
    public function store(Request $request)
    {
        $barang = $request->all();
        Barang::create($barang);
        return redirect('/');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('d_barang', compact('barang'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $barang = Barang::find( $request->input('id'));
        $barang->nama_barang = $request->nama_barang;
        $barang->id_mobil = $request->id_mobil;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();
        return redirect()->route('barang.index');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang.store');
    }
}
