@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold mb-5">GALERI</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-5">
            <div class="overflow-hidden shadow-lg flex-col">
                <img src="{{ asset('/assets/gambar/hero/1.webp') }}" alt="Gambar 1" class="w-full object-cover h-56">
                <div class="p-2 text-center">
                    <h3 class="text-lg font-semibold">Judul Gambar 1</h3>
                </div>
            </div>
            <div class="overflow-hidden  shadow-lg flex-col">
                <img src="{{ asset('/assets/gambar/hero/1.webp') }}" alt="Gambar 2" class="w-full object-cover h-56">
                <div class="p-2 text-center">
                    <h3 class="text-lg font-semibold">Judul Gambar 2</h3>
                </div>
            </div>
            <div class="overflow-hidden  shadow-lg flex-col">
                <img src="{{ asset('/assets/gambar/hero/2.webp') }}" alt="Gambar 3" class="w-full object-cover h-56">
                <div class="p-2 text-center">
                    <h3 class="text-lg font-semibold">Judul Gambar 3</h3>
                </div>
            </div>
            <div class="overflow-hidden  shadow-lg flex-col">
                <img src="{{ asset('/assets/gambar/hero/3.webp') }}" alt="Gambar 4" class="w-full object-cover h-56">
                <div class="p-2 text-center">
                    <h3 class="text-lg font-semibold">Judul Gambar 4</h3>
                </div>
            </div>
            <div class="overflow-hidden  shadow-lg flex-col">
                <img src="{{ asset('/assets/gambar/hero/4.webp') }}" alt="Gambar 5" class="w-full object-cover h-56">
                <div class="p-2 text-center">
                    <h3 class="text-lg font-semibold">Judul Gambar 5</h3>
                </div>
            </div>
            <div class="overflow-hidden  shadow-lg flex-col">
                <img src="{{ asset('/assets/gambar/hero/2.webp') }}" alt="Gambar 6" class="w-full object-cover h-56">
                <div class="p-2 text-center">
                    <h3 class="text-lg font-semibold">Judul Gambar 6</h3>
                </div>
            </div>
        </div>

    </div>
@endsection
