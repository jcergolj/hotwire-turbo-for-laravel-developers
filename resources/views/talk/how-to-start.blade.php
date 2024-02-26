@extends('layouts.talk-app')

@section('content')
    <x-title>
        Where to go from here?
    </x-title>

    <x-body>
        <x-ul>
            <li><x-link href="https://turbo.hotwired.dev/" target="_blank">Hotwire Turbo</x-link></li>
            <li><x-link href="https://turbo-laravel.com/" target="_blank">Laravel Trubo</x-link></li>
            <li>
                <x-link href="https://dev.37signals.com/a-happier-happy-path-in-turbo-with-morphing/" target="_blank">
                    Power of Morphing
                </x-link>
            </li>
            <li>using Turbo Laravel for broadcasting - in conjunction with morphing (in progress)</li>
        </x-ul>
    </x-body>
@endsection
