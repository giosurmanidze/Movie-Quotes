<x-layout>
    <x-slot name="content">
        @auth
            <a href="/admin/dashboard/create-quote"
                class="m-5 inline-block px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">{{__("Dashboard")}}</a>
        @endauth
        <div class="text-white flex flex-col items-center max-w-2xl w-[650px] top-1/2 transform translate-y-1/3">
            <x-image-check class="w-full h-[350px] rounded-xl" :quote="$quote" />
            <h3 class="font-Alkatra text-xl mt-3">" {{ $quote->quote }} "</h3>
            <a class="mt-2 underline text-xl font-Noto"
                href="{{ route('quotes.show', $quote->movie->id) }}">{{ $quote->movie?->title }}</a>
        </div>
        <x-lang-control  path_name='quotes.index' />
    </x-slot>
</x-layout>
