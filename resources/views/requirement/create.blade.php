<x-app-layout>
    <section>
        <form action="/requirement/{{ $job }}">
            @csrf
            <div class="flex flex-col mb-3">
                <label for="requirement" class="text-sm font-bold">Requirement :</label>
                <div class="flex gap-x-2 items-center">
                    <input id="requirement" type="text" class="px-2 bg-transparent border border-white/20 py-2 rounded-lg flex-1" autocomplete="off">
                    <button type="button" id="add_requirement" class="py-2 px-4 rounded-xl bg-blue-800 hover:bg-blue-950 transition duration-300">+</button>
                    <div id="requirement_list"></div>
                </div>
            </div>
            <x-form.submit />
        </form>
    </section>
</x-app-layout>