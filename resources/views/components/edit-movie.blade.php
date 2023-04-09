<x-navbar />
<x-layout>
    <x-slot name="content">
        <form method="POST" action="/admin/movies/{{ $movie->id }}" enctype="multipart/form-data" class="mt-8">
            @csrf
            @method('PATCH')

            <div class="mb-6 w-full">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="title_en">
                    {{ __('title_en') }}
                </label>

                <input class="border border-gray-400 p-2 w-[300px] outline-none rounded-md" type="text" name="title_en"
                    id="title_en" value="{{ old('title_en', $movie->title_en) }}" required>
                </input>

                @error('title_en')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 w-full">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="title_ka">
                    {{ __('title_ka') }}
                </label>

                <input class="border border-gray-400 p-2 w-[300px] outline-none rounded-md" type="text"
                    name="title_ka" id="title_ka" value="{{ old('title_ka', $movie->title_ka) }}" required>
                </input>

                @error('title_ka')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
        <x-lang-control :id="$movie->id" path_name='admin.update-movies.edit' />
    </x-slot>
</x-layout>
