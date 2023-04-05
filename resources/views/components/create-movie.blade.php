<x-navbar />
<x-layout>
    <x-slot name="content">
        <form method="POST" action="/admin/movies" enctype="multipart/form-data" class="mt-8">
            @csrf

            <div class="mb-6 w-full">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="title">
                    title
                </label>

                <input class="border border-gray-400 p-2 w-[300px] outline-none rounded-md" type="text" name="title"
                    id="title" value="{{ old('title') }}" required>
                </input>

                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Submit
                </button>
            </div>
        </form>
    </x-slot>
</x-layout>
