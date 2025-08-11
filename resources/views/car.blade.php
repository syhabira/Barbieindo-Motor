<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
@extends('layout.main')

@section('title', 'Welcome to Baherindo mobil')
 
@section('content')
  <div id="hero" class="hero flex flex-col mx-auto px-6 md:px-16">
    <div class="text mx-auto">
      <h1 class="text-[5rem] font-bold text-red-600">
        ROLLS ROYCE    
      </h1>
    </div>
    <div class="img">
        <img src="/img/rr.jpg" alt="" class="object-cover filter grayscale home_img w-full h-90 items-center flex mx-auto"> 
      </div>
  </div>
  
<div class="grid grid-cols-2 gap-6 px-16 mt-5">
  @foreach($mobil as $m)
    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
      <img class="object-cover w-full h-40 rounded-t-lg" src="storage/{{$m['gambar_mobil']}}" alt="">
      <div class="p-4 text-center">
        <h5 class="mb-2 text-[2rem] font-bold tracking-tight text-red-800">{{$m['nama_mobil']}}</h5>
        <p class="font-normal text-gray-500">Tahun Rilis : {{$m['tahun_mobil']}}</p>
        <p class="font-normal text-gray-500">Kecepatan/Jam : {{$m['km_mobil']}}</p>
        <h3 class="text-gray-700 font-semibold text-2xl mt-2">Rp.{{number_format($m['harga_mobil'])}}</h3>
      </div>
    </a>
  @endforeach
</div>

@endsection

</html>