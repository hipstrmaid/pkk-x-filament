@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <h1 class="text-2xl font-bold text-sky-500">VISI DAN MISI</h1>
        <ul class="text-center flex flex-col gap-3 mt-5">
            {!! $visi->visi_misi !!}
        </ul>
    </div>
@endsection
