<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
    @foreach($projects as $project)
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ Storage::url($project->screenshot) }}" alt="Project"
                 class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold">{{ $project->title }}</h3>
                <p class="text-gray-600 mt-2">{{ $project->description }}</p>
                <ul class="list-disc pl-5 mt-2 text-gray-700">
                    @foreach(json_decode($project->features ?? '[]') as $feature)
                        <li>{{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
