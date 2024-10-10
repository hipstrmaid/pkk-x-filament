@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold mb-5">INFORMASI TERBARU</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-10 py-5">
            <div class="bg-white shadow-md overflow-hidden">
                <img src="{{ asset('/assets/gambar/hero/1.webp') }}" alt="Judul Berita" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-gray-500 text-sm"><i class="fas fa-calendar mr-2"></i>20-09-2024</p>
                    <a href="#" class="text-lg font-semibold text-info hover:underline">Judul Berita</a>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur
                        voluptate!</p>
                </div>
            </div>

            <div class="bg-white shadow-md overflow-hidden">
                <img src="{{ asset('/assets/gambar/hero/2.webp') }}" alt="Judul Berita" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-gray-500 text-sm"><i class="fas fa-calendar mr-2"></i>20-09-2024</p>
                    <a href="#" class="text-lg font-semibold text-info hover:underline">Judul Berita</a>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur
                        voluptate!</p>
                </div>
            </div>
            <div class="bg-white shadow-md overflow-hidden">
                <img src="{{ asset('/assets/gambar/hero/3.webp') }}" alt="Judul Berita" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-gray-500 text-sm"><i class="fas fa-calendar mr-2"></i>20-09-2024</p>
                    <a href="#" class="text-lg font-semibold text-info hover:underline">Judul Berita</a>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur
                        voluptate!</p>
                </div>
            </div>
            <div class="bg-white shadow-md overflow-hidden">
                <img src="{{ asset('/assets/gambar/hero/4.webp') }}" alt="Judul Berita" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-gray-500 text-sm"><i class="fas fa-calendar mr-2"></i>20-09-2024</p>
                    <a href="#" class="text-lg font-semibold text-info hover:underline">Judul Berita</a>
                    <p class="text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur
                        voluptate!</p>
                </div>
            </div>
        </div>

    </div>
@endsection
