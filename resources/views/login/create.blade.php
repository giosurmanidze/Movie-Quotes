<x-layout>
    <x-slot name="content">
        <div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">
                <div class="flex items-center ga flex-col">
                    <svg style="color: rgb(229, 88, 0);" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-camera-reels-fill" viewBox="0 0 16 16"> <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" fill="color: rgb(229, 88, 0);"></path> <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" fill="color: rgb(229, 88, 0);"></path> <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z" fill="color: rgb(229, 88, 0);"></path> </svg>
                    <h2 class="mt-6 text-center text-2xl font-bold tracking-tight text-gray-300">{{ __('login') }}
                    </h2>

                </div>
                <form class="mt-8 space-y-6 min-w-[350px]" action="/admin/login" method="POST">
                    @csrf
                    <div class="-space-y-px rounded-md shadow-sm flex flex-col gap-3">

                        <div>
                            <label for="email" class="sr-only">Email address</label>
                            <input id="email" name="email" type="email"
                                class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-3 h-11 outline-none"
                                placeholder="{{ __('Email') }}" value="{{ old('email') }}">

                            @error('email')
                               <p class="text-red-500 text-xs mt-1">
                                    {{ $message }}
                                </p>
                            @enderror 
                         
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" required
                                class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-3 h-11 outline-none"
                                placeholder={{ __('Password') }}>

                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="group relative flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 h-10 items-center">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            {{ __('signIn') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <x-lang-control path_name='sessions.create' />
    </x-slot>
</x-layout>
