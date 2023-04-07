<x-layout>
    <x-slot name="content">
        <div class="text-white">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                    <path d="M19 12H6M12 5l-7 7 7 7" />
                </svg>
            </a>

            @if ($quotes->count() > 0)
                <div class="mt-10 flex flex-col">
                    <h1 class="p-15 text-xl">{{ $quotes[0]->movie->title }}</h1>
                    @foreach ($quotes as $quote)
                        <div class="mt-10 bg-white rounded-lg border border-black">
                            <img class="w-full h-[300px] rounded-tl-lg rounded-tr-lg" src="{{ $quote->movie_img }}" />
                            <h3 class="font-Alkatra text-xl text-black py-3 pl-2">" {{ $quote->quote }} "</h3>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No quotes found for this movie.</p>
            @endif
        </div>
        <x-lang-control :id="$quotes[0]->movie_id" path_name='quotes.show' />
    </x-slot>
</x-layout>
