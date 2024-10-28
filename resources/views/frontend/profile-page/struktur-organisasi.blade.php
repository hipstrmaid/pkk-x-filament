@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <h1 class="text-2xl font-bold text-sky-500 mb-5">BAGAN STRUKTUR TPP. PKK KELURAHAN LAPULU</h1>
        <img src="{{ Storage::url($struktur->struktur_organisasi) }}" alt="struktur-organisasi">
        </h1>

    </div>
@endsection
