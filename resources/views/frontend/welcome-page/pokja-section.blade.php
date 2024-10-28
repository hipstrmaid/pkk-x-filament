@php

    $sekretariat = 'sekretariat.show';
    $pokjai = 'pokja1.show';
    $pokjaii = 'pokja2.show';
    $pokjaiii = 'pokja3.show';
    $pokjaiv = 'pokja4.show';

@endphp

<div class="container mx-auto flex flex-wrap justify-center px-5 mt-10">

    <div class="card w-full sm:w-1/2 md:w-1/5 text-info-content flex-shrink-0">
        <figure class="px-2 pt-2">
            <img src="{{ asset('assets/icon/networking.webp') }}" alt="Shoes" class="w-64" />
        </figure>
        <div class="card-body items-center text-center text-primary-content">
            <a href="{{ route('sekretariat.show') }}" class="card-title text-2xl">SEKRETARIAT</a>
            <p class="text-sm">Sekretariat TP PKK Kelurahan Lapulu</p>
            <div class="card-actions">
                <a href="/sekretariat">
                    <button
                        class="bg-sky-500 hover:bg-sky-800 px-5 py-2 rounded-full font-bold text-gray-50">Selengkapnya</button>
                </a>
            </div>
        </div>
    </div>

    <div class="card w-full sm:w-1/2 md:w-1/5 text-gray-900 flex-shrink-0">
        <figure class="px-2 pt-2">
            <img src="{{ asset('assets/icon/pokja-1.webp') }}" alt="Shoes" class="rounded-xl w-64" />
        </figure>
        <div class="card-body items-center text-center">
            <a href="{{ route('pokja1.show') }}" class="card-title text-2xl text-primary-content">POKJA I</a>
            <p class="text-sm">Bidang Pembinaan Karakter Dalam Keluarga</p>
            <div class="card-actions">
                <a href="/pokja-i">
                    <button
                        class="bg-sky-500 hover:bg-sky-800 px-5 py-2 rounded-full font-bold text-gray-50">Selengkapnya</button>
                </a>
            </div>
        </div>
    </div>

    <div class="card w-full sm:w-1/2 md:w-1/5 text-gray-900 flex-shrink-0">
        <figure class="px-2 pt-2">
            <img src="{{ asset('assets/icon/pokja-2.webp') }}" alt="Shoes" class="rounded-xl w-64" />
        </figure>
        <div class="card-body items-center text-center">
            <a href="{{ route('pokja2.show') }}" class="card-title text-2xl text-primary-content">POKJA II</a>
            <p class="text-sm">Pendidikan dan Peningkatan Ekonomi Keluarga</p>
            <div class="card-actions">
                <a href="/pokja-ii">
                    <button
                        class="bg-sky-500 hover:bg-sky-800 px-5 py-2 rounded-full font-bold text-gray-50">Selengkapnya</button>
                </a>
            </div>
        </div>
    </div>

    <div class="card w-full sm:w-1/2 md:w-1/5 text-gray-900 flex-shrink-0">
        <figure class="px-2 pt-2">
            <img src="{{ asset('assets/icon/pokja-3.webp') }}" alt="Shoes" class="rounded-xl w-64" />
        </figure>
        <div class="card-body items-center text-center">
            <a href="{{ route('pokja3.show') }}" class="card-title text-2xl text-primary-content">POKJA III</a>
            <p class="text-sm">Bidang Penguatan Ketahanan Keluarga</p>
            <div class="card-actions">
                <a href="pokja-iii">
                    <button
                        class="bg-sky-500 hover:bg-sky-800 px-5 py-2 rounded-full font-bold text-gray-50">Selengkapnya</button>
                </a>
            </div>
        </div>
    </div>

    <div class="card w-full sm:w-1/2 md:w-1/5 text-gray-900 flex-shrink-0">
        <figure class="px-2 pt-2">
            <img src="{{ asset('assets/icon/pokja-4.webp') }}" alt="Shoes" class="rounded-xl w-64" />
        </figure>
        <div class="card-body items-center text-center">
            <a href="{{ route('pokja4.show') }}" class="card-title text-2xl text-primary-content">POKJA IV</a>
            <p class="text-sm">Bidang Kesehatan Keluarga dan Lingkungan</p>
            <div class="card-actions">
                <a href="/pokja-iv">
                    <button
                        class="bg-sky-500 hover:bg-sky-800 px-5 py-2 rounded-full font-bold text-gray-50">Selengkapnya</button>
                </a>
            </div>
        </div>
    </div>

</div>
