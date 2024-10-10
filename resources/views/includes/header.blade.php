{{-- bg-blue-500 --}}
@php
    $home = '/';
    $sejarahpkk = 'sejarah-pkk';
    $programpokok = '10-program-pokok';
    $artilogo = 'arti-dan-logo';
    $visimisi = 'visi-misi';
    $strukturorganisasi = 'struktur-organisasi';
    $profilpembina = 'profil-pjpembina-pkk';
    $profilketua = 'profil-pjketua-pkk';
    $mars = 'mars-pkk';

    $sekretariat = 'sekretariat';
    $pokjai = 'pokja-i';
    $pokjaii = 'pokja-ii';
    $pokjaiii = 'pokja-iii';
    $pokjaiv = 'pokja-iv';

    $agenda = 'agenda';
    $informasi = 'informasi-terbaru';
    $galeri = 'galeri';
    $kontak = 'kontak';

@endphp
<div class="flex py-3 px-5 items-center bg-sky-800 text-white top-0 z-10">
    <div class="logo flex-1">
        <img src="{{ asset('assets/gambar/logo.png') }}" alt="Logo">
    </div>
    <div class="flex-none lg:hidden">
        <button id="nav-toggle"
            class="flex items-center px-3 py-2 border border-2 rounded text-gray-100 border-gray-300 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:items-center lg:w-auto">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ $home }}" class="text-md font-bold text-yellow-200">Home</a></li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Profile</summary>
                    <ul class="bg-gray-100 text-gray-900 rounded-none z-10 w-52 ">
                        <li><a href="{{ route($sejarahpkk) }}" class="hover:bg-yellow-400">Sejarah PKK</a></li>
                        <li><a href="{{ route($programpokok) }}" class="hover:bg-yellow-400">10 Program Pokok PKK</a>
                        </li>
                        <li><a href="{{ route($artilogo) }}" class="hover:bg-yellow-400">Arti dan Logo PKK</a></li>
                        <li><a href="{{ route($visimisi) }}" class="hover:bg-yellow-400">Visi & Misi</a></li>
                        <li><a href="{{ route($strukturorganisasi) }}" class="hover:bg-yellow-400">Struktur
                                Organisasi</a></li>
                        <li><a href="{{ route($profilketua) }}" class="hover:bg-yellow-400">Profil Pj.Ketua PKK</a></li>
                        <li><a href="{{ route($profilpembina) }}" class="hover:bg-yellow-400">Profil Pj.Pembina PKK</a>
                        </li>
                        <li><a href="{{ route($mars) }}" class="hover:bg-yellow-400">Mars PKK</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">POKJA & Sekretariat</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a href="{{ route($sekretariat) }}" class="hover:bg-yellow-400">Sekretariat</a></li>
                        <li><a href="{{ route($pokjai) }}" class="hover:bg-yellow-400">Pokja I</a></li>
                        <li><a href="{{ route($pokjaii) }}" class="hover:bg-yellow-400">Pokja II</a></li>
                        <li><a href="{{ route($pokjaiii) }}" class="hover:bg-yellow-400">Pokja III</a></li>
                        <li><a href="{{ route($pokjaiv) }}" class="hover:bg-yellow-400">Pokja IV</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Informasi</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10 w-52">
                        <li><a href="{{ route($agenda) }}" class="hover:bg-yellow-400">Agenda Kegiatan</a></li>
                        <li><a href="{{ route($informasi) }}" class="hover:bg-yellow-400">Informasi Terbaru</a></li>
                        <li><a href="{{ route($galeri) }}" class="hover:bg-yellow-400">Galeri</a></li>
                        <li><a href="{{ route($kontak) }}" class="hover:bg-yellow-400">Kontak</a></li>
                    </ul>
                </details>
            </li>

            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Daerah</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary class="text-md font-bold hover:text-yellow-200">Data</summary>
                    <ul class="bg-gray-100 text-md text-gray-900 rounded-none z-10">
                        <li><a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</div>

<div id="mobile-menu" class="hidden lg:hidden absolute bg-blue-500 z-50 w-full">
    <ul class="bg-blue-500 text-gray-100">
        <li><a href="{{ $home }}" class="block py-2 px-4 font-bold text-yellow-200 hover:bg-blue-600">Home</a>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Profile</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none text-xs">
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($sejarahpkk) }}">Sejarah
                            PKK</a>
                    </li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($programpokok) }}">10 Program
                            Pokok
                            PKK</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($artilogo) }}">Arti dan Logo
                            PKK</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($visimisi) }}">Visi & Misi</a>
                    </li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block"
                            href="{{ route($strukturorganisasi) }}">Struktur
                            Organisasi</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($profilketua) }}">Profil
                            Pj.Ketua
                            PKK</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($profilpembina) }}">Profil
                            Pj.Pembina
                            PKK</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($mars) }}">Mars PKK</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">POKJA & Sekretariat
                </summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none text-xs">
                    <li class="p-1 hover:bg-yellow-200"><a class="block"
                            href="{{ route($sekretariat) }}">Sekretariat</a>
                    </li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($pokjai) }}">Pokja I</a>
                    </li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($pokjaii) }}">Pokja II</a>
                    </li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($pokjaiii) }}">Pokja
                            III</a>
                    </li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($pokjaiv) }}">Pokja IV</a>
                    </li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Informasi</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none text-xs">
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($agenda) }}">Agenda
                            Kegiatan</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($informasi) }}">Informasi
                            Terbaru</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($galeri) }}">Galeri</a>
                    </li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block" href="{{ route($kontak) }}">Kontak</a>
                    </li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Daerah</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="p-1 hover:bg-yellow-200"><a class="block">Link 1</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block">Link 2</a></li>
                </ul>
            </details>
        </li>
        <li>
            <details onclick="toggleDetails(event)">
                <summary class="block py-2 px-4 font-bold hover:text-yellow-200 hover:bg-blue-600">Data</summary>
                <ul class="bg-gray-100 text-gray-900 py-2 px-4 rounded-none">
                    <li class="p-1 hover:bg-yellow-200"><a class="block">Link 1</a></li>
                    <li class="p-1 hover:bg-yellow-200"><a class="block">Link 2</a></li>
                </ul>
            </details>
        </li>
    </ul>
</div>
