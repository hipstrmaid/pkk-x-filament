<div class="flex w-full flex-col mt-10">
    <div class="divider divider-neutral text-3xl font-bold text-sky-800">BERITA TERBARU</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-10 py-5">
    @foreach ($beritas as $berita)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105">
            <img src="{{ Storage::url($berita->thumbnail_berita) }}" alt="Judul Berita" class="w-full h-48 object-cover">
            <div class="p-4">
                <a href="{{ route('berita.show', $berita->slug) }}"
                    class="text-md font-bold text-blue-600 hover:underline transition-colors duration-200">{{ $berita->judul_berita }}</a>
                <p class="text-gray-500 text-xs mt-1">
                    <i class="fas fa-calendar mr-2"></i>
                    {{ \Carbon\Carbon::parse($berita->tanggal_publish)->translatedFormat('F d, Y') }}
                </p>
                <p class="text-gray-700 mt-2 text-sm leading-snug">
                    {!! Str::limit($berita->isi_berita, 80, '...') !!}
                </p>
            </div>
        </div>
    @endforeach
</div>
