<x-navbar />
<x-layout>
    <x-slot name="content">
        <form method="POST" action="/admin/movies/{{ $movie->id }}" enctype="multipart/form-data" class="mt-8">
            @csrf
            @method('PATCH')
            @php
                $locale = app()->getLocale();
            @endphp

            <x-edit-input :locale="$locale" :movie="$movie" text="title_en" />
            <x-edit-input :locale="$locale" :movie="$movie" text="title_ka" />
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
        <x-lang-control :id="$movie->id" path_name='admin.update-movies.edit' name="movie"/>
    </x-slot>
</x-layout>
