<div class="space-y-6">
    @forelse($educations as $edu)
        <div class="bg-white shadow rounded-lg p-4">
            <h3 class="text-xl font-bold">{{ $edu->degree }} - {{ $edu->institution }}</h3>
            <p class="text-gray-600">{{ $edu->start_year }} - {{ $edu->end_year ?? 'Sekarang' }}</p>
            <p class="mt-2">{{ $edu->description }}</p>
        </div>
    @empty
        <p class="text-gray-500">Belum ada data pendidikan.</p>
    @endforelse
</div>