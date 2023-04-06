<x-layout>
    <x-slot name="content">
        <button onclick="goBack()">Go Back</button>
        <div class="mt-10 flex flex-col">
            <div class="mt-10 bg-white rounded-lg border border-black">
                <img class="w-full h-[300px] rounded-tl-lg rounded-tr-lg" src="{{ $quote->movie_img }}" />
                <h3 class="font-Alkatra text-xl text-black py-3 pl-2">" {{ $quote->quote }} "</h3>
            </div>
        </div>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>
    </x-slot>
</x-layout>
