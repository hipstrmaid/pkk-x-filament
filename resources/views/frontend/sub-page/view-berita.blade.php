@extends('layouts.main')
@section('content')
    <section class="text-gray-900">
        <div class="w-full">
            <img class="w-full object-cover" src="{{ Storage::url($berita->thumbnail_berita) }}" alt="sejarah">
        </div>
        <div class="content mx-5 px-5 lg:mx-20 lg:px-20 py-10">
            <h1 class="text-2xl md:text-5xl lg:text-4xl text-sky-600 mb-3 font-medium">
                {{ $berita->judul_berita }}
            </h1>

            <p class="text-gray-50 text-xs sm:text-sm badge badge-lg badge-info">
                <i class="fas fa-user-circle mr-1"></i> {{ $berita->penulis }}
            </p>
            {{-- <span class="mx-1">|</span> --}}
            <p class="text-gray-50 text-xs sm:text-sm badge badge-lg badge-info">
                <i class="fas fa-calendar mr-2"></i> {{ $berita->tanggal_publish }}
            </p>

            <article class="space-y-5 text-justify pt-5 text-gray-600 prose text-sm sm:text-base">
                {!! $berita->isi_berita !!} <!-- Renders the rich text with formatting -->
            </article>
        </div>
    </section>
@endsection
