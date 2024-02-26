@extends('layouts.talk-app')

@section('content')
<div class="flex justify-center">
    <img src="{{ asset('images/hotwire-for-laravel-resentation.svg') }}" loading="lazy" decoding="async" width="240" height="240" class="m-auto" />
</div>

<div class="mt-8">
    <x-title>
        Hotwire Turbo for Laravel Developers
    </x-title>

    <h1 class="text-center text-xl font-semibold leading-relaxed text-gray-600 dark:text-gray-400">
        Vienna Meetup March, 2024
    </h1>
</div>

@endsection
