<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
</head>
<body>

@extends('layout.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')

  <!-- Teks di atas overlay -->
  <div class=" inset-0 flex flex-col items-center mt-15 text-center px-4 z-10">
    <h1 class="text-[4rem] font-bold text-black drop-shadow-lg">Welcome to <span ><span class="text-red-600">Baherindo</span><span class="text-gray-800">Motor</span></span></h1>
    <p class="text-[1.5rem] p-3 rounded-md font-bold text-red-500 ">Jual beli motor premium trusted di Indonesia!</p>
  </div>

<div class="flex justify-center items-center mt-[2rem]">
  <table class="w-[600px] text-sm text-left text-gray-500 dark:text-gray-400 bg-white shadow-md rounded-lg">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">Product name</th>
        <th scope="col" class="px-6 py-3">Price</th>
      </tr>
    </thead>
    <tbody>

      @foreach($motor as $m)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          {{$m['nama']}}
        </th>
        <td class="px-6 py-4">Rp.{{ number_format($m['harga'], 0, ',', '.') }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

</body>
</html>