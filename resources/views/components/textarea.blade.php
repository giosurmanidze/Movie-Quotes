@props(['text', 'for'])

<div class="mb-6 w-[400px]" >
    <label class="block mb-2 uppercase font-bold text-xs text-white" for="{{ $for }}">
        {{ __($text) }}
    </label>

    <textarea  class="border border-gray-400 p-2 w-full outline-none rounded-md" type="text" name="{{ $for }}"
        id="{{ $for }}" value="{{ old($for) }}">
                </textarea>

    @error($for)
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
