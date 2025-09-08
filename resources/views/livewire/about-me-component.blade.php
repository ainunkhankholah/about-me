<div class="bg-gradient-to-r from-green-50 to-blue-50 py-16">
    <div class="max-w-6xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-8">
        <!-- Foto Profil -->
        <div class="flex-shrink-0">
            <div class="w-64 h-64 rounded-xl overflow-hidden shadow-lg border-4 border-white">
                <img src="{{ Storage::url($about->profile_image) }}" alt="{{ $about->name }}"
                     class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Konten Cerita -->
        <div class="flex-1 bg-white rounded-xl shadow-lg p-8">
            <!-- <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 mb-4">{{ $about->name }}</h1> -->
            
            <div class="prose prose-lg text-gray-700 max-w-none">
                {!! nl2br(e($about->description)) !!}
            </div>
        </div>
    </div>
</div>
