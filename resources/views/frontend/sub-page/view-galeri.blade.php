@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold mb-5">GALERI</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-5">
            @if (!empty($images) && is_array($images))
                @foreach ($images as $image)
                    <div class="overflow-hidden shadow-lg flex-col">
                        <img src="{{ Storage::url($image) }}" alt="Gambar {{ $galeri->judul_galeri }}"
                            class="w-full object-cover h-56">
                    </div>
                @endforeach
            @else
                <p>No images available for this gallery.</p>
            @endif
        </div>


    </div>
@endsection
