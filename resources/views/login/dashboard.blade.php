<x-navbar />
<x-layout>
    <x-slot name="content">

        <form method="POST" action="/admin/quotes" enctype="multipart/form-data" class="mt-8 w-[400px]">
            @csrf

            <x-textarea text="quote_ka" for="quote_ka" />
            <x-textarea text="quote_en" for="quote_en" />

            <div class="mb-6 w-[400px]">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="image">
                    {{ __('Image') }}

                </label>
                <input class="border border-gray-400 p-2 w-full rounded-md" type="file" name="image"
                    id="image">
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="movie_id">
                    {{ __('Movies') }}

                </label>

                <select name="movie_id" id="movie_id" class="w-[400px] h-9 outline-none rounded-md pl-1">
                    @foreach (\App\Models\Movie::all() as $movie)
                        <option value="{{ $movie->id }}" {{ old('movie_id') == $movie->id ? 'selected' : '' }}>
                            {{ ($movie->getTranslation('title', app()->getLocale())) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    {{ __('Submit') }}
                </button>
            </div>
        </form>
        <x-lang-control path_name='admin.dashboard.quotes.create' />
    </x-slot>
</x-layout>
