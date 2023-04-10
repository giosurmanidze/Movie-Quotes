@props(['locale', 'movie', 'text'])

<div class="mb-6 w-full">
    <label class="block mb-2 uppercase font-bold text-xs text-white" for="{{ $text }}">
        {{ __($text) }}
    </label>

    <input class="border border-gray-400 p-2 w-[350px] outline-none rounded-md" type="text" name="{{ $text }}"
        id="{{ $text }}" value="{{ old($text, $movie->$text) }}" required>
    </input>

    @error($text)
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
