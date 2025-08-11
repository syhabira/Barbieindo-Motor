<?php

namespace App\Http\Controllers;

use App\Models\BaherindoMobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if($request->HasFile('gambar_mobil')){
            $path=$request->file('gambar_mobil')->store('mobilbaherindoImages','public');
            $validateData['gambar_mobil']=$path;
        }

        //        $imageName = time() . '.' . $request->gambar_mobil->extension();
        // $request->gambar_mobil->move(public_path('gambar_mobil'), $imageName);

        // Baherindomobil::create([
        //     'nama_mobil' => $request->nama_mobil,
        //     'harga_mobil' => $request->harga_mobil,
        //     'km_mobil' => $request->km_mobil,
        //     'tahun_mobil' => $request->tahun_mobil,
        //     'gambar_mobil' => $imageName,
        // ]);

        // return redirect('/about');
        Baherindomobil::create($validateData);
        return redirect('about');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
