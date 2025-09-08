<div class="flex flex-wrap justify-center gap-3">
    @forelse($skills as $skill)
        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full shadow">
            {{ $skill->name }}
        </span>
    @empty
        <p class="text-gray-500">Belum ada data skill.</p>
    @endforelse
</div>