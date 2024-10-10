@extends('layouts.main')
@section('content')
    <div class="flex flex-col justify-center items-center text-gray-900 p-10">
        <div class="title-container">
            <h1 class="text-2xl text-sky-500 font-bold mb-10">PROFIL PJ.KETUA PKK</h1>
        </div>


        <div class="container grid grid-cols-1 lg:grid-cols-8 flex justify-center gap-2">
            <div class="img col-span-4 justify-center flex items-center">
                <img src="{{ asset('assets/gambar/person.webp') }}" alt="ketua tp. pkk kelurahan lapulu" class="px-5 pt-5">
            </div>
            <div class="wrapper col-span-4">
                <div class="bg-white overflow-hidden shadow rounded-lg border w-full">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-bold text-gray-900">
                            PROFIL PJ.KETUA PKK
                        </h3>
                        {{-- <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        This is some information about the user.
                    </p> --}}
                    </div>
                    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                        <dl class="sm:divide-y sm:divide-gray-200 flex flex-col">
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nama
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    Ny. ASRIANI, S.M
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Tempat, Tanggal Lahir
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    johndoe@example.com
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Agama
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    (123) 456-7890
                                </dd>
                            </div>
                            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Alamat
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    123 Main St<br>
                                    Anytown, USA 12345
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

            </div>
            {{-- <div class="tabel">
            <table class="min-w-full border-collapse border border-2 border-gray-300 ">
                <tbody>
                    <tr>
                        <div class="foto border border border-gray-300">
                            <img src="{{ asset('assets/gambar/person.webp') }}" alt="ketua tp. pkk kelurahan lapulu"
                                class="h-48 px-5 pt-5">
                        </div>
                    </tr>

                    <tr>
                        <td class="border border-gray-300 border-top-0 font-bold">Data Umum</td>
                        <td class="border border-gray-300 border-top-0 font-bold">Deskripsi</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300">Nama</td>
                        <td class="border border-gray-300">Ny. ASRIANI, S.M</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300">Tempat, Tanggal Lahir</td>
                        <td class="border border-gray-300">Kolom 2 - Baris 4</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300">Agama</td>
                        <td class="border border-gray-300">Kolom 2 - Baris 5</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300">Alamat</td>
                        <td class="border border-gray-300">Kolom 2 - Baris 6</td>
                    </tr>
                </tbody>
            </table>
        </div> --}}

        </div>
    </div>
@endsection
