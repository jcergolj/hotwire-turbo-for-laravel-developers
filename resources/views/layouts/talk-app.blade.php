<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('head')
    </head>
    <body class="antialiased">
        <x-progress-bar />
        <div class="relative sm:flex sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="grid w-full lg:p-8 mx-10">
                <div>@yield('content')</div>
                <div class="pt-20 ">
                    @if (isset($previous))
                        <a tabindex="2" id="previous-button" class="underline text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ $previous }}">
                            Previous
                        </a>
                    @endif

                    @if (isset($next))
                        <a tabindex="1" id="next-button" class="float-right underline text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ $next }}">
                            Next
                        </a>
                    @endif
                </div>
            </div>
        </div>

    </body>
</html>
