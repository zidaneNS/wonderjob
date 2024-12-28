<x-app-layout>
    <section class="mt-20">
        <h1 class="text-5xl text-white/35">Find Great Place To Work</h1>
        <p class="mt-6 text-white/90">Get access to to millions company reviews</p>
    </section>
    <section>
        <x-app-search />
    </section>
    <section class="pt-8">
        <h1 class="text-2xl font-bold">Popular Companies</h1>
        <div class="grid grid-cols-4 gap-4 w-full pt-4">
            <x-card>
                <x-slot:title>Job Title</x-slot:title>
                Employer
            </x-card>
        </div>
    </section>
</x-app-layout>