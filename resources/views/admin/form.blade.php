{{-- BIAR LUCU ADA ADMIN DI NAVBARR PAKKK --}}

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
 <div class=" inset-0 flex flex-col items-center mt-10 text-center px-4 z-10">
    <h1 class="text-[4rem] font-bold text-black drop-shadow-lg">Hello Admin <span ><span class="text-red-600">Baherindo</span><span class="text-gray-800">Motor</span></span></h1>
    <p class="text-[1.5rem] p-3 rounded-md font-bold text-red-500 ">Form Pengisian Data Baru</p>
  </div>

  

<form class="max-w-sm mx-auto mt-10">
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Motor</label>
    <input type="email" id="email" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
  </div>
  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Harga</label>
    <input type="text`" id="password" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
  </div>
  <div class="mb-5">
    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 ">Tahun Rilis</label>
    <input type="text" id="repeat-password" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
  </div>
  <div class="mb-5">
    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 ">KM</label>
    <input type="text" id="repeat-password" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
  </div>
  <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah Data Baru</button>
</form>

  @endsection 

</html>