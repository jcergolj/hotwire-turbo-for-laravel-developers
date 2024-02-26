@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Laravel
    </x-title>

    <x-body>
        <x-ul>
            <li>
                <x-link href="https://turbo-laravel.com/" target="_blank">Laravel Turbo</x-link>,
                <x-link href="https://github.com/tonysm" target="_blank">Tony Messias</x-link>
            </li>
            <li>
                an elegant way to combine Hotwire and Laravel
            </li>
            <li>
                works with Livewire, Alpine.js *
            </li>
        </x-ul>

    </x-body>
@endsection
