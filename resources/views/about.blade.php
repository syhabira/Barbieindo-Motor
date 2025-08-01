<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
@extends('layout.main')

@section('title', 'Welcome to Baherindo Motor')
 
@section('content')
  <div id="hero" class="hero flex flex-col mx-auto px-6 md:px-16">
    <div class="text mx-auto">
      <h1 class="text-[5rem] font-bold text-red-600">
        DUCATI    
      </h1>
    </div>
    <div class="img">
        <img src="/img/one.jpg" alt="" class="object-cover filter grayscale home_img w-full h-90 items-center flex mx-auto"> 
      </div>
  </div>
  
<div class="grid grid-cols-2 gap-6 px-16 mt-5">
  @foreach(collect($motor)->take(2) as $m)
    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
      <img class="object-cover w-full h-40 rounded-t-lg" src="img/{{$m['foto']}}" alt="">
      <div class="p-4 text-center">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-red-800">{{$m['nama']}}</h5>
        <h3 class="text-gray-700 font-bold text-lg">Rp.{{number_format($m['harga'])}}</h3>
        <p class="font-bold text-gray-500">Tahun Rilis : {{$m['tahun']}}</p>
        <p class="font-bold text-gray-500">Kecepatan/Jam : {{$m['km']}}</p>
      </div>
    </a>
  @endforeach
</div>

@endsection

</html>