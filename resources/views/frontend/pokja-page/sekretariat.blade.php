@extends('layouts.main')
@section('content')
    <div class="wrapper flex flex-col justify-center items-center my-10 gap-5">
        <div class="content mx-10">
            <x-card image="assets/gambar/person/sekretaris.JPG" title="Sekretaris" subtitle="Ny. Desi Malinda" />
        </div>
        <div class="px-10 w-full flex flex-col gap-3">
            <x-accordion judul="PROGRAM UNGGULAN">
                racing
            </x-accordion>
            <x-accordion judul="Program Kegiatan Tahun 2021">
                racing
            </x-accordion>
            <x-accordion judul="Program Kegiatan Tahun 2022">
                racing
            </x-accordion>
        </div>
    </div>
@endsection
