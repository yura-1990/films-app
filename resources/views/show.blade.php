@extends('layout.layout')

@section('title', 'Details')

@section('content')

    <div class="movie-info border-b border-gray-800">{{-- starting point of movie info --}}

        <div class="container mx-auto px-4 py-16 flex lg:flex-row flex-col" >
            <img src="/img/grid.jpg" alt="" class="lg:w-96 w-100 mx-auto lg:mx-0 mb-10 lg:mb-0" >
            <div class="xl:ml-24 md:ml-8  ml-0">
                <h2 class="text-4xl font-semibold">Paradise (2012)</h2>
                <div class="flex items-center text-gray-400 text-sm my-1" >
                    <span><i class="bi bi-star-fill text-orange-500"></i></span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20, 2022</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Comedy</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Boon Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 hover:bg-orange-600 text-gray-900 rounded-full font-semibold px-5 py-4 transition ease-in-out duration-150">
                        <i class="bi bi-play-circle"></i>
                        <span class="ml-2">Play trailer</span>
                    </button>
                </div>

            </div>
        </div>
    </div>{{-- ending point of movie info --}}

    <div class="movie-cast border-b border-gray-800">{{-- Starting point of cast movie --}}
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
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
        </div>
    </div>{{-- Ending point of cast movie --}}

    <div class="movie-cast border-b border-gray-800">{{-- Starting point of cast movie --}}
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 ms:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                <div class="mt-8">
                    <a href="#" class="flex">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#" class="flex">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#" class="flex">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#" class="flex">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#" class="flex">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#" class="flex">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#" class="flex">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="#" class="flex">
                        <img src="/img/grid.jpg" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>



            </div>
        </div>
    </div>{{-- Ending point of cast movie --}}




@endsection
