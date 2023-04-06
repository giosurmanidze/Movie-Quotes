<x-layout>
    <x-slot name="content">
        <div class="text-white flex flex-col items-center max-w-2xl w-[650px] top-1/2 transform translate-y-1/3">
            <img class="w-full h-[350px] rounded-xl" src="{{ $quote->movie_img }}" />
            <h3 class="font-Alkatra text-xl mt-3">" {{ $quote->quote }} "</h3>
            <a class="mt-2 underline text-xl font-Noto"
                href="{{ route('quotes.show', $quote->id) }}">{{ $quote->movie?->title }}</a>
            </div> 
    </x-slot>
</x-layout>
