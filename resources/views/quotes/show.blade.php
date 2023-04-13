<x-layout>
    <x-slot name="content">
        <div class="text-white">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                    <path d="M19 12H6M12 5l-7 7 7 7" />
                </svg>
            </a>

            @if ($movie->count() > 0)
                <div class="mt-10 flex flex-col">
                    <h1 class="p-15 text-xl">{{ $movie->getTranslation('title', app()->getLocale()) }}</h1>
                    @foreach ($movie->quotes as $quote)
                        <div class="mt-10 bg-white rounded-lg border border-black">
                            @if ($quote->movie_img)
                                <x-image-check class="h-[350px] w-full object-cover rounded" :quote="$quote" />
                            @else
                                <div
                                    class="max-w-2xl w-[400px] h-[350px] bg-gray-300 flex items-center justify-center rounded">
                                    <h3 class="text-black absolute text-md text-xl">{{ __('index_img_status') }}</h3>
                                    <img class="h-[350px] h-[350px] w-full object-cover rounded" />
                                </div>
                            @endif
                            <h3 class="font-Alkatra text-xl text-black py-3 pl-2">
                                "{{ $quote->getTranslation('quote', app()->getLocale()) }} "</h3>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No quotes found for this movie.</p>
            @endif
        </div>
        <x-lang-control id="{{ $movie->id }}" path_name="quotes.show" name="movie" />
    </x-slot>
</x-layout>
