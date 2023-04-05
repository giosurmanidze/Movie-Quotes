<div class="flex text-white items-center w-full mt-3 justify-around">
    <div class="flex gap-3">
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->is('admin/dashboard/') ? 'bg-gray-900 text-white' : '' }}">Edit Quote</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->is('edit-movie') ? 'bg-gray-900 text-white' : '' }}">Edit Movie</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->is('admin/dashboard/create-quote') ? 'bg-gray-900 text-white' : '' }}">Create Quote</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->is('create-movie') ? 'bg-gray-900 text-white' : '' }}">Create Movie</a>
    </div>
    
    <div class="flex items-center">
      <h1 class="text-xl font-semibold">Welcome Back, {{ auth()->user()->name }}</h1>
      <form method="POST" action='/logout' class="text-sm font-semibold text-blue-500 ml-6">
        @csrf
        <button type="submit" class="text-md hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md">Log out</button>
      </form>
    </div>
  </div>
  

<x-layout>
    <x-slot name="content">
        <form method="POST" action="/admin/quotes" enctype="multipart/form-data" class="mt-8">
            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="title">
                    quote
                </label>

                <textarea class="border border-gray-400 p-2 w-full outline-none rounded-md" type="text" name="quote" id="quote"
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

                <input class="border border-gray-400 p-2 w-full rounded-md" type="file" name="image" id="image" required>

                @error('image')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="movie_id">
                    movies
                </label>

                <select name="movie_id" id="movie_id" class="w-full h-9 outline-none rounded-md pl-1">
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
