<div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    @forelse($photos as $photo)
        <div class="overflow-hidden rounded-lg shadow">
            <img src="{{ Storage::url($photo->image) }}" alt="Gallery"
                 class="w-full h-48 object-cover hover:scale-110 transition">
        </div>
    @empty
        <p class="text-gray-500 col-span-full">Belum ada foto yang ditambahkan.</p>
    @endforelse
</div>