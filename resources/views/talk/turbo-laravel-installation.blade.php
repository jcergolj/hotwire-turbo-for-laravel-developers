@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Laravel - Installation
    </x-title>

    <x-body>
        <x-ul>
            <li>
                <code>composer require hotwired-laravel/turbo-laravel:^2.0.0-beta3</code>
            </li>
            <li>
                <code>
                    php artisan turbo:install
                </code>
            </li>
            <li>
                or <code>
                    php artisan turbo:install --jet
                </code>
            </li>
            <li>
                or <code>
                    php artisan turbo:install --alpine
                </code>
            </li>
        </x-ul>
    </x-body>
@endsection
