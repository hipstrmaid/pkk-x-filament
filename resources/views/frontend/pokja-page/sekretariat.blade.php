@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center p-5 px-10">
        <div>
            <h1 class="font-bold text-4xl text-sky-500 mb-5">{{ $sekretariat->nama_kelompok }}</h1>
        </div>
        <div class="wrapper grid grid-cols-8 gap-5 my-10 text-accent-content">
            <div class="content col-span-8 md:col-span-2 mx-10">
                <x-card image="{{ Storage::url($sekretariat->gambar) }}" title="Sekretaris" subtitle="Ny. Desi Malinda" />
            </div>
            <div class="accordion-section col-span-8 md:col-span-6 px-10 flex flex-col gap-3">
                <x-accordion judul="Misi">
                    {!! $sekretariat->misi !!}
                </x-accordion>
                <x-accordion judul="Program Pokok">
                    {!! $sekretariat->program_pokok !!}
                </x-accordion>
                <x-accordion judul="Program Unggulan">
                    {!! $sekretariat->program_unggulan !!}
                </x-accordion>
                <x-accordion judul="Program Prioritas">
                    {!! $sekretariat->program_prioritas !!}
                </x-accordion>
                <x-accordion judul="Kelompok Kegiatan">
                    {!! $sekretariat->kelompok_kegiatan !!}
                </x-accordion>
                {{-- <x-accordion judul="Galeri Foto">
                    foto
                </x-accordion> --}}
            </div>
        </div>
    </div>
@endsection


{{--
        <div class="px-10 w-full flex flex-col gap-3 mt-5">
            <div role="tablist" class="tabs tabs-bordered">
                <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Misi" checked="checked" />
                <div role="tabpanel" class="tab-content p-10">Menumbuhkan karakter keluarga yang bahagia, aman dan damai
                    melalui
                    <br>
                    penghayatan dan pengamalan Pancasila serta semangat gotong royong.
                </div>

                <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Program Pokok" />
                <div role="tabpanel" class="tab-content p-10">Tab content for Program Pokok</div>

                <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Program Unggulan" />
                <div role="tabpanel" class="tab-content p-10">Tab content for Program Unggulan</div>

                <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Program Prioritas" />
                <div role="tabpanel" class="tab-content p-10">Tab content for Program Prioritas</div>

                <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Kelompok Kegiatan" />
                <div role="tabpanel" class="tab-content p-10">Tab content for Kelompok Kegiatan</div>

                <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Galeri Foto" />
                <div role="tabpanel" class="tab-content p-10">Tab content for Galeri Foto</div>
            </div>


        </div> --}}
