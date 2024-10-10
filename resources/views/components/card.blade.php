<div class="card bg-gray-100 w-64 border-2 text-black shadow-xl hover:bg-gray-200 cursor-pointer">
    <figure class="px-5 pt-5">
        <img src="{{ asset($image) }}" alt="Image" class="rounded-xl h-60" />
    </figure>
    <div class="p-5 items-center text-center">
        <h2 class="text-xl font-bold">{{ $title }}</h2>
        <p class="text-md text-gray-500">{{ $subtitle }}</p>
    </div>
</div>
