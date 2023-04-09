<x-navbar />
<x-layout>
    <x-slot name="content">
        <table class="min-w-full divide-y divide-gray-200 mt-3">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{__("Movies")}}</th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">{{ __('Edit') }}</span>
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">{{ __('Delete') }}</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($movies as $movie)
                    <tr>
                        <td class="px-6 py-4 whitespace-wrap max-w-sm">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ ($movie->getTranslation('title', app()->getLocale())) }}
                                    </div>
                                </div>
                            </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/admin/update-movies/{{ $movie->id }}/edit"
                                class="text-blue-500 hover:text-blue-600">{{ __('Edit') }}</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <form method="POST" action="/admin/movies/{{ $movie->id }}">
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
