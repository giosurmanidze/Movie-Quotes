<x-navbar />
<x-layout>
    <x-slot name="content">
        <form method="POST" action="/admin/quotes/{{$quote->id}}" enctype="multipart/form-data" class="mt-8">
            @csrf
            @method('PATCH')

            <h1 class="text-white mt-5">Edit post: {{ $quote->quote }}</h1>

            <div class="mb-6 mt-8">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="title">
                    quote
                </label>

                <textarea class="border border-gray-400 p-2 w-full outline-none rounded-md" name="quote" id="quote" required>{{ old('quote', $quote->quote) }}</textarea>

                @error('quote')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 h-[250px]">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="image">
                    image
                </label>

                <div class="flex flex-col">
                    <input class="border border-gray-400 p-2 w-full rounded-md" type="file" name="image" id="image"
                        required value="{{ old('image', $quote->movie_img) }}">
                    <x-image-check class="rounded-xl h-[150px] w-full mt-3"  :quote="$quote"/>
                </div>
                @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-8">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="movie_id">
                    movies
                </label>

                <select name="movie_id" id="movie_id" class="w-full h-9 outline-none rounded-md pl-1">
                    @foreach (\App\Models\Movie::all() as $movie)
                        <option value="{{ $movie->id }}"
                            {{ old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : '' }}>
                            {{ ucwords($movie->title) }}</option>
                    @endforeach
                </select>

                @error('movie_id')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    Update
                </button>
            </div>
        </form>
    </x-slot>
</x-layout>
