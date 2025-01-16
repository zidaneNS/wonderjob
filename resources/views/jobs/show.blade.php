<x-app-layout>
    <section class="flex flex-col gap-y-4">
        <h1 class="text-3xl font-bold text-white/90 border-b-2 border-b-white/30 w-fit">{{ $joblist->title }}</h1>
        <h2 class="text-sm text-white/80">{{ $joblist->user->name }} | {{ $joblist->location }}</h2>
        <p class="text-xl font-bold">{{ $joblist->salary }} / year</p>
        <p class="border-2 border-blue-600 py-2 px-4 rounded-xl w-fit flex justify-center items-center text-blue-600">{{ $joblist->type }}</p>
    </section>
    <section>
        <p class="text-sm font-bold mb-3">Skill Requirements : </p>
        <ul class="list-disc flex flex-col gap-y-3 border-2 border-white/30 py-2 px-6 rounded-xl">
            <li>Requirement 1</li>
            <li>Requirement 2</li>
            <li>Requirement 3</li>
        </ul>
    </section>
    <section class="flex justify-between items-center">
        <a href="/jobs" class="pt-3 hover:underline">&laquo; back</a>
        <a href="/jobs/{{ $joblist->id }}/edit" class="border-2 border-blue-800 bg-transparent hover:bg-blue-800 transition duration-300 py-2 px-4 text-sm rounded-xl text-blue-600 font-bold hover:text-white">Edit Job</a>
    </section>
</x-app-layout>