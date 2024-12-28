<div class="flex flex-col py-2 px-2 border border-white/50 max-w-50 rounded-xl cursor-pointer hover:border-blue-900 transition duration-300 group">
    <div class="flex gap-x-4">
        <img src="assets/bookmark-icon.png" width="40" alt="company loho">
        <div>
            <h2 class="text-xl font-bold group-hover:text-blue-900 transition duration-300">{{ $title }}</h2>
            <p class="text-sm">{{ $slot }}</p>
        </div>
    </div>
    <div class="flex justify-between pt-3">
        <a href="#" class="hover:underline hover:text-blue-900">Salary</a>
        <a href="#" class="hover:underline hover:text-blue-900">Questions</a>
        <a href="#" class="hover:underline hover:text-blue-900">Open Jobs</a>
    </div>
</div>