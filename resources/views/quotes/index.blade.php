<x-layout>
    <x-slot name="content">
        @auth
            <a href="/admin/dashboard/create-quote"
                class="m-5 inline-block px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">{{ __('Dashboard') }}</a>
        @endauth
        <div class="text-white flex flex-col items-center max-w-2xl w-[650px] transform translate-y-1/4">
            @if ($quote->movie_img)
                <x-image-check class="h-[350px] w-full object-cover rounded" :quote="$quote" />
            @else
                <div class="max-w-2xl w-[650px] bg-gray-300 flex items-center justify-center rounded">
                    <h3 class="text-black absolute text-md text-xl">{{__("index_img_status")}}</h3>
                    <img class="h-[350px] w-full object-cover rounded" />
                </div>
            @endif
            <h3 class="font-Alkatra text-xl mt-3">" {{ $quote->quote }} "</h3>
            <a class="mt-2 underline text-xl font-Noto"
                href="{{ route('quotes.show', $quote->movie->id) }}">{{ $quote->movie?->title }}</a>
        </div>
        <x-lang-control path_name='quotes.index' />
    </x-slot>
</x-layout>
