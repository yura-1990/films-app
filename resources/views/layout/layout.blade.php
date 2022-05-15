<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white">
<nav class="border-b border-gray-800 ">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex items-center flex-col md:flex-row">
            <li class="">
                <a href="#">
                    <i class="bi bi-film"></i>
                    Movie app
                </a>
            </li>
            <li class=" ml-0 md:ml-16 md:mt-0 mt-2">
                <a href="" class="hover:text-gray-300">Movie</a>
            </li>
            <li class="ml-0 md:ml-8 md:mt-0 mt-2">
                <a href="" class="hover:text-gray-300">TV shows</a>
            </li>
            <li class="ml-0 md:ml-8 md:mt-0 mt-2">
                <a href="" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        <div class="flex items-center sm:flex-row flex-col">
            <div class="relative flex items-center md:mt-0 mt-2">
                <i class="bi bi-search absolute ml-4"></i>
                <input type="search " class="bg-gray-800 focus:shadow-gray-500 rounded-full w-64 pl-10 py-1  focus:shadow-gray-50" placeholder="Search" />
            </div>
            <div class="ml-4 md:mt-0 mt-2">
                <a href="#">
                    <img src="/img/avatar.jpg" class="w-6 h-6 rounded-full border-gray-600">
                </a>
            </div>
        </div>
    </div>
</nav>
    @yield('content')
</body>
</html>
