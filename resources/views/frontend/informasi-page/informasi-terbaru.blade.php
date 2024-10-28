@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold mb-5">INFORMASI TERBARU</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-2 py-5">
            @foreach ($beritas as $berita)
                <div class="bg-white shadow-md overflow-hidden">
                    <img src="{{ Storage::url($berita->thumbnail_berita) }}" alt="Judul Berita"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <p class="text-gray-500 text-sm"><i class="fas fa-calendar mr-2"></i>
                            {{ \Carbon\Carbon::parse($berita->tanggal_publish)->translatedFormat('F d, Y') }}
                        </p>
                        <a href="{{ route('berita.show', $berita->slug) }}"
                            class="text-lg font-semibold text-info hover:underline">{{ $berita->judul_berita }}</a>
                        <p class="text-gray-700 mt-2"> {!! Str::limit($berita->isi_berita, 80, '...') !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
