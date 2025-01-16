<div class="flex py-2 px-2 border border-white/50 max-w-50 rounded-xl cursor-pointer hover:border-blue-900 transition duration-300 group justify-between">
    <div class="flex gap-x-4 items-center">
        <img src="assets/bookmark-icon.png" width="40" alt="company loho">
        <div class="flex flex-col">
            <h2 class="text-xl font-bold group-hover:text-blue-900 transition duration-300">{{ $title }}</h2>
            <p class="text-sm text-white/50">{{ $slot }} | {{ $location }}</p>
            <h5 class="text-lg">{{ $salary }} / year</h5>
        </div>
    </div>
    <div class="flex justify-between items-center gap-x-2">
        <a href="#" class="py-2 px-4 bg-white/20 rounded-xl hover:bg-white/15 transition duration-300">Questions</a>
        <a href="/jobs/{{ $id }}" class="py-2 px-4 bg-white/20 rounded-xl hover:bg-white/15 transition duration-300">Open Jobs</a>
    </div>
</div>