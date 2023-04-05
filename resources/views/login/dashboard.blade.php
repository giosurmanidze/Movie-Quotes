<div class="flex text-white items-center space-around">
    <h1>Welcome Back, {{ auth()->user()->name }}</h1>
    <form method="POST" action='/logout' class="text-sm font-semibold text-blue-500 ml-6">
        @csrf
        <button type="submit">Log out</button>
    </form>
</div>
<x-layout>
    <x-slot name="content">
        <form method="POST" action="/admin/quotes" enctype="multipart/form-data" class="mt-5">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="title">
                    quote
                </label>

                <textarea class="border border-gray-400 p-2 w-full" type="text" name="quote" id="quote"
                    value="{{ old('quote') }}" required>
                </textarea>

                @error('quote')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="image">
                    image
                </label>

                <input class="border border-gray-400 p-2 w-full" type="file" name="image" id="image"
                    required>

                @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="movie_id">
                    movies
                </label>

                <select name="movie_id" id="movie_id">
                    @foreach (\App\Models\Movie::all() as $movie)
                        <option value="{{ $movie->id }}" {{ old('movie_id') == $movie->id ? 'selected' : '' }}>
                            {{ ucwords($movie->title) }}</option>
                    @endforeach
                </select>

                @error('movie_id')
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
