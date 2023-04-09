<x-layout>
    <x-slot name="content">
        <button class="m-5 inline-block px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600"
            onclick="goBack()">{{ __('back') }}</button>
        <div class="mt-10 flex flex-col">
            <div class="mt-10 bg-white rounded-lg border border-black">
                @if ($quote->movie_img)
                    <x-image-check class="h-[350px] w-full object-cover rounded" :quote="$quote" />
                @else
                    <div class="max-w-2xl w-[400px] h-[350px] bg-gray-300 flex items-center justify-center rounded">
                        <h3 class="text-black absolute text-md text-xl">{{ __('index_img_status') }}</h3>
                        <img class="h-[350px] h-[350px] w-full object-cover rounded" />
                    </div>
                @endif
                <h3 class="font-Alkatra text-xl text-black py-3 pl-2">"
                    {{ $quote->getTranslation('quote', app()->getLocale()) }} "</h3>
            </div>
        </div>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </x-slot>
</x-layout>
