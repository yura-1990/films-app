@extends('layout.layout')
@section('title', 'movie app')
@section('content')
    <div class="container mx-auto px-4">

        <div class="popular-movie py-10">{{--start point of popular movie--}}
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular movie</h2>

            <div class="grid grid-cols-1 ms:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

            </div>
        </div>{{--ending point of popular movie--}}

        <div class="now-playing-movie">{{--start point of playing movie--}}
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now playing</h2>

            <div class="grid grid-cols-1 ms:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#" class="">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div>
                        <a href="" class="text-lg hover:text-gray-500">Paradise</a>
                        <div class="flex items-center text-gray-400 text-sm my-1" >
                            <span><i class="bi bi-star-fill text-orange-500"></i></span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2022</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>

            </div>
        </div>{{--ending point of playing movie--}}

    </div>

@endsection

