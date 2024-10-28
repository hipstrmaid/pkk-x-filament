<div class="flex w-full object-cover flex-col flex-wrap my-5">
    <div class="divider divider-neutral text-3xl font-bold text-sky-800">GALERI</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-5">
    @foreach ($galeris as $galeri)
        @php
            // Check if 'gambar' is an array or a JSON string
            $images = is_array($galeri->gambar) ? $galeri->gambar : json_decode($galeri->gambar, true);
            $firstImage = !empty($images) ? $images[0] : null; // Get the first image or null if empty
        @endphp

        <div class="overflow-hidden shadow-lg flex-col">
            @if ($firstImage)
                <img src="{{ Storage::url($firstImage) }}" alt="{{ $galeri->judul_galeri }}"
                    class="w-full object-cover h-56">
            @else
                <img src="{{ asset('/assets/gambar/default-image.jpg') }}" alt="Default Image"
                    class="w-full object-cover h-56">
            @endif
            <div class="flex flex-col p-3">
                <span
                    class="text-xs">{{ \Carbon\Carbon::parse($galeri->tanggal_galeri)->translatedFormat('F d, Y') }}</span>
                <a href="{{ route('galeri.show', ['slug' => $galeri->slug]) }}"
                    class="text-sm font-semibold text-sky-500 hover:underline">{{ $galeri->judul_galeri }}</a>
            </div>
        </div>
    @endforeach
</div>
