<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
@extends('layout.main')

@section('title', $motor->nama_motor)
 
@section('content')
  
<div class="px-[10rem] mt-5">
    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm">
      <img class="object-cover w-full h-70 rounded-t-lg" src="../storage/{{$motor['gambar_motor']}}" alt="">
      <div class="p-4 text-center">
        <h5 class="mb-2 text-3xl font-bold tracking-tight text-red-800">{{$motor['nama_motor']}}</h5>
        <p class="font-normal text-gray-500">Tahun Rilis : {{$motor['tahun_motor']}}</p>
        <p class="font-normal text-gray-500">Kecepatan/Jam : {{$motor['km_motor']}}</p>
        <h3 class="text-gray-700 font-semibold text-xl mt-2">Rp.{{number_format($motor['harga_motor'])}}</h3>
        <button class="bg-emerald-400 text-white font-bold text-xl p-5 mt-5 mb-5 rounded-lg w-180">ORDER ON WHATSAPP <i class="fa-brands fa-whatsapp text-2xl ml-3"></i></button>
        <div class="flex flex-row gap-5 mb-5 items-center">
                <form action="{{ route('motor.destroy', $motor->id) }}" method="POST">
                 @csrf
                 @method('DELETE')
              <button class="bg-red-600 p-3 font-bold text-white rounded-md">DELETE DATA</button>
              </form>    
            <a href="{{route('motor.edit', $motor->id)}}" class="bg-gray-700 p-3 font-bold text-white rounded-md">EDIT DATA</a>

        </div>

    </div>

    </div>
</div>

@endsection

</html>