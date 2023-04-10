@props(['text', 'for'])

<div class="mb-6 ">
    <label class="block mb-2 uppercase font-bold text-xs text-white" for="{{ $for }}">
        {{ __( $text ) }}
    </label>

    <input class="border border-gray-400 p-2 w-[350px] outline-none rounded-md" type="text" name="{{ $for }}"
        id="{{ $for }}" value="{{ old( $for ) }}">
    </input>

    @error( $for )
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>