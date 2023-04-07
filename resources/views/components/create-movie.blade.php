<x-navbar />
<x-layout>
    <x-slot name="content">
        <form method="POST" action="/admin/movies" enctype="multipart/form-data" class="mt-8">
            @csrf

            <div class="mb-6 w-full">
                <label class="block mb-2 uppercase font-bold text-xs text-white" for="title">
                    {{ __('Title') }}
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
                    {{__("Submit")}}
                </button>
            </div>
        </form>
        <div class="fixed left-0 top-1/2 transform -translate-y-1/2 p-8 flex flex-col justify-center gap-3">
            <div class="flex items-center justify-center w-9 h-9 rounded-[50%] border border-white {{ request()->language == 'en' ? 'bg-white text-black' : 'border-white text-white' }}">
                <a href="{{ route('admin.dashboard.movies.create', ['language' => 'en']) }}">en</a>
            </div>
            <div class="flex items-center justify-center w-9 h-9 rounded-[50%] border border-white {{ request()->language == 'ka' ? 'bg-white text-black' : 'border-white text-white' }}">
                <a href="{{ route('admin.dashboard.movies.create', ['language' => 'ka']) }}">ka</a>
            </div>
        </div>
    </x-slot>
</x-layout>
