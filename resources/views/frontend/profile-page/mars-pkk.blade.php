@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold mb-5">MARS PKK</h1>
        </div>
        <p class="inline-flex text-center items-center font-bold">
            {!! $mars->mars_pkk !!}
        </p>

    </div>
@endsection
