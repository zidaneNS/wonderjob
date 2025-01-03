<x-app-layout>
    <section>
        <x-app-search />
    </section>
    <section>
        <a href="/jobs/create" class="py-2 px-4 bg-white/20 rounded-xl hover:bg-white/40 transition duration-300">+ Add Job</a>
    </section>
    <section class="space-y-4">
        @foreach ($joblists as $joblist)
            <x-card-wide>
                <x-slot:title>{{ $joblist->title }}</x-slot:title>
                {{ $joblist->user->name }}
                <x-slot:location>{{ $joblist->location }}</x-slot:location>
                <x-slot:salary>{{ $joblist->salary }}</x-slot:salary>
            </x-card-wide>
        @endforeach
    </section>
    {{ $joblists->links() }}
</x-app-layout>