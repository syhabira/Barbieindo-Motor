<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaherindoMotor;
use Illuminate\Routing\Controller;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('motor.create');
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
            'nama_motor' => 'required|string',
            'harga_motor' => 'required|numeric',
            'km_motor' => 'required|integer',
            'tahun_motor' => 'required|integer',
            'gambar_motor' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        if($request->HasFile('gambar_motor')){
            $path=$request->file('gambar_motor')->store('motorbaherindoImages','public');
            $validateData['gambar_motor']=$path;
        }

        //        $imageName = time() . '.' . $request->gambar_motor->extension();
        // $request->gambar_motor->move(public_path('gambar_motor'), $imageName);

        // BaherindoMotor::create([
        //     'nama_motor' => $request->nama_motor,
        //     'harga_motor' => $request->harga_motor,
        //     'km_motor' => $request->km_motor,
        //     'tahun_motor' => $request->tahun_motor,
        //     'gambar_motor' => $imageName,
        // ]);

        // return redirect('/about');
        BaherindoMotor::create($validateData);
        return redirect('about');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motor = BaherindoMotor::findOrFail(id: $id);
        return view('motor.show',compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $motor =BaherindoMotor::findOrFail($id);
         return view('motor.edit',compact('motor'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $motor = BaherindoMotor::findOrFail($id);
          $validateData = $request->validate([
            'nama_motor' => 'required|string',
            'harga_motor' => 'required|numeric',
            'km_motor' => 'required|integer',
            'tahun_motor' => 'required|integer',
            'gambar_motor' => 'image|mimes:jpg,jpeg,png',
        ]);

        if($request->HasFile('gambar_motor')){
            $path=$request->file('gambar_motor')->store('motorbaherindoImages','public');
            $validateData['gambar_motor']=$path;
        }
          $motor->update($validateData);
            return redirect('about');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $motor =BaherindoMotor::findOrFail($id);
    $motor->delete();
    return redirect('about');
    }
}
