<x-navbar />
<x-layout>
    <x-slot name="content">
        <table class="min-w-full divide-y divide-gray-200 mt-3">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{__("Quotes")}}</th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">{{ __('Edit') }}</span>
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">{{ __('Delete') }}</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($quotes as $quote)
                    <tr>
                        <td class="px-6 py-4 whitespace-wrap max-w-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-20 w-20">
                                    <x-image-check class="h-20 w-20 object-cover rounded" :quote="$quote"/>
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        <a href="/movies/{{ $quote->id }}/quote"
                                            class="hover:underline">{{ $quote->quote }}</a>
                                    </div>
                                    <div class="text-sm text-gray-500">{{ $quote->movie?->title }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/admin/update-quotes/{{ $quote->id }}/edit"
                                class="text-blue-500 hover:text-blue-600">{{ __('Edit') }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form method="POST" action="/admin/quotes/{{ $quote->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-layout>
