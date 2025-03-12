<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class Mobilcontrol extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobil',compact('mobils'));
    }
    
    public function create()
    {
        return view('c_mobil');
    }

    public function store(Request $request)
    {
        $mobil = $request->all();
        Mobil::create($mobil);
        return redirect('/');
    }

    public function edit($id)
    {
        $mobil = Mobil::find($id);
        return view('d_mobil', compact('mobil'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $mobil = Mobil::find( $request->input('id'));
        $mobil->nama = $request->nama;
        $mobil->merk = $request->merk;
        $mobil->save();
        return redirect()->route('mobil.index');
    }

    public function destroy($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect()->route('mobil.store');
    }
}
