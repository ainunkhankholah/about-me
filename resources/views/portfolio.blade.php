<x-layouts.portfolio :title="'Portofolio Ainun Khan'">

    {{-- About Me --}}
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <livewire:about-me-component />
        </div>
    </section>

    {{-- Projects --}}
    <section id="projects" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6 text-center">Project Experience</h2>
            <livewire:projects-component />
        </div>
    </section>

    {{-- Photo Gallery --}}
    <section id="photos" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6 text-center">Photo Collection</h2>
            <livewire:photo-gallery-component />
        </div>
    </section>

    {{-- Education --}}
    <section id="education" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6 text-center">Education</h2>
            <livewire:education-component />
        </div>
    </section>

    {{-- Skills --}}
    <section id="skills" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6 text-center">Skills</h2>
            <livewire:skills-component />
        </div>
    </section>

</x-layouts.portfolio>
