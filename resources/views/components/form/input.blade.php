@props(['idty'])

<div class=" flex flex-col mb-3">
    <label for="{{ $idty }}" class="text-sm font-bold">{{ $slot }}</label>
    <input {{ $attributes }} id="{{ $idty }}" name="{{ $idty }}" class="px-2 bg-transparent border border-white/20 py-2 rounded-lg" autocomplete="off" autofocus>
    @error($idty)
        <p>{{ $message }}</p>
    @enderror
</div>