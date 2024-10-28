@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold mb-5">GALERI</h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-5">
            @foreach ($galeris as $galeri)
                @php
                    // Check if 'gambar' is an array or a JSON string
                    $images = is_array($galeri->gambar) ? $galeri->gambar : json_decode($galeri->gambar, true);
                    $firstImage = !empty($images) ? $images[0] : null; // Get the first image or null if empty
                @endphp

                <div class="overflow-hidden shadow-lg flex-col">
                    @if ($firstImage)
                        <img src="{{ Storage::url($firstImage) }}" alt="{{ $galeri->judul_galeri }}"
                            class="w-full object-cover h-56">
                    @else
                        <img src="{{ asset('/assets/gambar/default-image.jpg') }}" alt="Default Image"
                            class="w-full object-cover h-56">
                    @endif

                    <div class="p-2 text-center">
                        <a href="" class="text-lg font-semibold">{{ $galeri->judul_galeri }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
