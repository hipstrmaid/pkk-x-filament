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
            <p>Akolade melingkar segilima memiliki arti Pancasila sebagai azas Gerakan Pemberdayaan dan Kesejahteraan
                Keluarga.</p>
            <p>Bentuk ini terdiri dari gambar – gambar:</p>
            <ul class="px-5">
                <li>1. Bintang</li>
                <li>2. 17 butir kapas, 8 simpul pengikat dan 45 butir padi</li>
                <li>3. Akolade melingkar</li>
                <li>4. Rangkaian mata rantai</li>
                <li>5. Lingkaran putih dengan tulisan Pemberdayaan dan Kesej ahteraan Keluarga berwarna Hitam.</li>
                <li>6. 10 buah ujung tombak yang tersusun merupakan bunga.</li>
            </ul>
        </div>
    </div>
@endsection
