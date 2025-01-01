<x-app-layout>
    <section class="px-40">
        <h1 class="text-4xl text-white/40 mb-3">Add Job</h1>

        <form action="/jobs" method="POST">
            @csrf
            <x-form.input placeholder="Programmer..." type="text" idty="title">Title :</x-form.input>
            <x-form.input placeholder="USA..." type="text" idty="location">Location :</x-form.input>
            <x-form.input placeholder="$20.000" type="text" idty="salary">Salary :</x-form.input>
            <div class="flex flex-col mb-3">
                <label for="work_method" class="text-sm font-bold">Work Method :</label>
                <select name="work_method" id="work_method" class="px-2 bg-transparent border border-white/20 py-2 rounded-lg" autocomplete="off">
                    <option class="text-black" value="WFH">WFH</option>
                    <option class="text-black" value="WFO">WFO</option>
                </select>
            </div>
            <div class="flex justify-between">
                <a href="/jobs" class="border-2 border-white/40 px-4 py-2 rounded-xl">Close</a>
                <x-form.submit />
            </div>
        </form>
    </section>
    
</x-app-layout>