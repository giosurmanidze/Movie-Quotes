<x-layout>
    <x-slot name="content">
        @foreach ($quotes as $quote)
            <div class="text-white flex flex-col items-center max-w-2xl w-[500px] gap-5 mt-20">
                <img class="w-full h-[300px] rounded-xl" src="{{ $quote->movie_img }}" />
                <h3 class="font-Alkatra text-xl">" {{ $quote->quote }} "</h3>
                <a class="mt-2 underline text-xl font-Noto"
                    href="{{ route('quotes.show', $quote->movie) }}">{{ $quote->movie->title }}</a>
            </div>
        @endforeach
    </x-slot>
</x-layout>
