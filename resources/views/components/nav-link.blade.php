@props(['active'])
<a {{ $attributes }} class="{{ $active ? "bg-white/20" : "bg-transparent" }} hover:bg-white/20 py-2 px-2 rounded-xl transition duration-300">{{ $slot }}</a>