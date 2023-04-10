<x-navbar />
<x-layout>
    <x-slot name="content">
        <form method="POST" action="/admin/movies" enctype="multipart/form-data" class="mt-8">
            @csrf
            <x-inputField text="title_ka" for="title_ka" />
            <x-inputField text="title_en" for="title_en" />
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    {{ __('Submit') }}
                </button>
            </div>
        </form>
        <div class="fixed left-0 top-1/2 transform -translate-y-1/2 p-8 flex flex-col justify-center gap-3">
            <x-lang-control path_name='admin.dashboard.movies.create' name="movie"/>
    </x-slot>
</x-layout>
