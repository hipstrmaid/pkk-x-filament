@extends('layouts.main')
@section('content')
    <div class="container flex flex-col justify-center items-center gap-3 p-5">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold">Arti & Logo PKK</h1>
        </div>
        <div class="image-container">
            <img src="{{ asset('assets/gambar/logo-pkk.png') }}" class="h-64 py-5" alt="logo-pkk">
        </div>
        <div class="text-container text-gray-900">
            {!! $logo->arti_logo !!}
        </div>
    </div>
@endsection
