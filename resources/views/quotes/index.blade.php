<x-layout>
    <x-slot name="content">
        @auth
            <a href="/admin/dashboard/create-quote"
                class="m-5 inline-block px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">{{ __('Dashboard') }}</a>
        @endauth
        @if ($quote)
            <div class="text-white flex flex-col items-center max-w-2xl w-[650px] transform translate-y-1/4">
                @if ($quote->movie_img)
                    <x-image-check class="h-[350px] w-full object-cover rounded" :quote="$quote" />
                @else
                    <div class="max-w-2xl w-[650px] bg-gray-300 flex items-center justify-center rounded">
                        <h3 class="text-black absolute text-md text-xl">{{ __('index_img_status') }}</h3>
                        <img class="h-[350px] w-full object-cover rounded" />
                    </div>
                @endif
                <h3 class="font-Alkatra text-xl mt-3">" {{ $quote->getTranslation('quote', app()->getLocale()) }} "</h3>
                <a class="mt-2 underline text-xl font-Noto" href="{{ route('quotes.show', $quote->movie?->id) }}">
                    {{ $quote->movie->getTranslation('title', app()->getLocale()) }}
                </a>
            </div>
            <x-lang-control path_name='quotes.index' />
        @else
            <div class="text-center mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="h-16 w-16 inline-block fill-current text-gray-300">
                    <path fill-rule="evenodd"
                        d="M17.42 17L22 21.58V2a1 1 0 00-1-1H3a1 1 0 00-1 1v20a1 1 0 001 1h14.42zM16 19h-4v-2h4v2zm-4-4h4v2h-4v-2zm4-4h-4V9h4v2zm4 4h-4v-2h4v2zm-8-8h4v2h-4V7z"
                        clip-rule="evenodd" />
                </svg>
                <h1 class="text-4xl font-bold text-gray-400 my-5">Site is currently under maintenance</h1>
                <p class="text-xl text-gray-300">We are currently performing some updates on our website.<br> Please
                    check back soon.</p>
            </div>
        @endif
    </x-slot>
</x-layout>
