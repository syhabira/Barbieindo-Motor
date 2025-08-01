<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $motor = [
            ['id' => 1, 'foto' => 'onee.jpg', 'nama' => 'Ducati Panigale V4', 'harga' => 980000000, 'tahun'=>2020 , 'km'=>'200KM/H'],
            ['id' => 2, 'foto' => 'two.ducati.jpg', 'nama' => 'Ducati Monster', 'harga' => 480000000, 'tahun'=>2025, 'km'=>'300KM/H'],
            ['id' => 3, 'foto' => 'one.bmw.jpg', 'nama' => 'BMW S1000RR', 'harga' => 765000000],
            ['id' => 4, 'foto' => 'two.bmw.jpg', 'nama' => 'BMW R1250GS', 'harga' => 620000000],
            ['id' => 5, 'foto' => 'one.harley.jpg', 'nama' => 'Harley Iron 883', 'harga' => 399000000],
            ['id' => 6, 'foto' => 'two.harley.jpg', 'nama' => 'Harley Street Glide', 'harga' => 850000000],
        ];


        return view(view: 'about', data: compact('motor'));
    
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
        //
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
