<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [
            ['id' => 1, 'nama' => 'Yamaha R15 V4', 'harga' => 38500000],
            ['id' => 2, 'nama' => 'Honda CBR250RR', 'harga' => 62500000],
            ['id' => 3, 'nama' => 'Kawasaki Ninja ZX-25R', 'harga' => 78900000],
            ['id' => 4, 'nama' => 'Suzuki GSX-R150', 'harga' => 32000000],
            ['id' => 5, 'nama' => 'BMW G 310 R', 'harga' => 109000000]
        ];
        return view(view: 'welcome', data: compact('motor'));
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
