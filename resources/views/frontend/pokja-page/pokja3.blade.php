@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center p-5 px-10">
        <div>
            <h1 class="font-bold text-4xl text-sky-500 mb-5">{{ $data->nama_kelompok }}</h1>
        </div>
        <div class="wrapper grid grid-cols-8 gap-5 my-10 text-accent-content">
            <div class="content col-span-8 md:col-span-2 mx-10">
                <x-card image="{{ Storage::url($data->gambar) }}" title="Sekretaris" subtitle="Ny. Desi Malinda" />
            </div>
            <div class="accordion-section col-span-8 md:col-span-6 px-10 flex flex-col gap-3">
                <x-accordion judul="Misi">
                    {!! $data->misi !!}
                </x-accordion>
                <x-accordion judul="Program Pokok">
                    {!! $data->program_pokok !!}
                </x-accordion>
                <x-accordion judul="Program Unggulan">
                    {!! $data->program_unggulan !!}
                </x-accordion>
                <x-accordion judul="Program Prioritas">
                    {!! $data->program_prioritas !!}
                </x-accordion>
                <x-accordion judul="Kelompok Kegiatan">
                    {!! $data->kelompok_kegiatan !!}
                </x-accordion>
                {{-- <x-accordion judul="Galeri Foto">
                    foto
                </x-accordion> --}}
            </div>
        </div>
    </div>
@endsection
