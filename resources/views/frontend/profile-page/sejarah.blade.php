@extends('layouts.main')
@section('content')
    <section class="text-gray-900">
        <div class="w-full">
            <img class="w-full h-80 object-cover" src="{{ asset('assets/gambar/hero/1.webp') }}" alt="sejarah">
        </div>
        <div class="content px-20 py-10">
            <h1 class="font-bold text-2xl text-sky-500 mb-5">SEJARAH PKK</h1>
            <div class="space-y-5 text-justify">
                {!! $sejarah->sejarah_pkk !!}
            </div>



        </div>
    </section>
@endsection
