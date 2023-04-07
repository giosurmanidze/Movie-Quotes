<div class="flex text-white items-center w-full mt-3 justify-around">
    <div class="flex gap-3">
        <a href="/"
        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium "">
        {{ __('Home') }}</a>
        <a href="/admin/dashboard/update-quote"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->is('admin/dashboard/update-quote') ? 'bg-gray-900 text-white' : '' }}">
            {{ __('EditQuote') }}</a>
        <a href="/admin/dashboard/update-movie"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->is('admin/dashboard/update-movie') ? 'bg-gray-900 text-white' : '' }}">
            {{ __('EditMovie') }}</a>
        <a href="/admin/dashboard/create-quote"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->is('admin/dashboard/create-quote') ? 'bg-gray-900 text-white' : '' }}">
            {{ __('CreateQuote') }} </a>
        <a href="/admin/dashboard/create-movie"
            class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium {{ request()->is('admin/dashboard/create-movie') ? 'bg-gray-900 text-white' : '' }}">
            {{ __('CreateMovie') }}</a>
    </div>

    <div class="flex items-center">
        <h1 class="text-xl font-semibold">{{ __('Hello') }}, {{ auth()->user()->name }}</h1>
        <form method="POST" action='/logout' class="text-sm font-semibold text-blue-500 ml-6">
            @csrf
            <button type="submit"
                class="text-md hover:bg-blue-500 hover:text-white px-3 py-2 rounded-md">{{ __('Logout') }}</button>
        </form>
    </div>
</div>
