<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Kuliner</title>
    <link rel="stylesheet" href="{{ asset('style/styles-ghofur.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>

<nav class="bg-gray-100 border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
    <a href="#" class="flex items-center">
        <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Logo" />
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">KulinerKu</span>
    </a>
    <div class="flex items-center lg:order-2">
        <input type="text" placeholder="Search..." class="hidden md:block p-2 rounded border border-gray-300 text-sm" />
    </div>
    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
      <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
        <li><a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded lg:bg-transparent lg:text-blue-700 lg:p-0">Home</a></li>
        <li><a href="#" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 lg:p-0">About</a></li>
        <li><a href="#" class="block py-2 pr-4 pl-3 text-gray-700 hover:text-blue-700 lg:p-0">Menu</a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Menu Makanan Section -->
<div class="max-w-screen-xl mx-auto p-6">
  <h1 class="text-2xl font-bold mb-6 text-gray-800">Menu Makanan</h1>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
  <img src="{{ asset('images/ayam betutu.jpg') }}" alt="Ayam Betutu" class="rounded-lg shadow-md w-full max-w-xs mx-auto">
  <img src="{{ asset('images/sate lilit.jpg') }}" alt="Sate Lilit" class="rounded-lg shadow-md w-full max-w-xs mx-auto">

  </div>
</div>


</body>
</html>
