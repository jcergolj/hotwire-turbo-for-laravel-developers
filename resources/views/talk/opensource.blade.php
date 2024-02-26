@extends('layouts.talk-app')

@section('content')
    <x-title>
        My Opensource packages
    </x-title>

    <x-body>
        <x-ul>
            <li>
                <x-link href="https://github.com/jcergolj/laravellte" target="_blank">
                    Admin Dashboard - Laravel, Livewire, Boostrap, Aplinejs
                </x-link>
            </li>
            <li>
                <x-link href="https://github.com/jcergolj/laravel-form-request-assertions" target="_blank">
                    Package for unit testing Laravel form request classes
                </x-link>
            </li>
            <li>
                <x-link href="https://github.com/jcergolj/brevo-webhook-manager-for-laravel" target="_blank">
                    Brevo Webhook Manager CLI Tool for Laravel
                </x-link>
            </li>
            <li>
                <x-link href="https://github.com/jcergolj/laravel-view-test-assertions" target="_blank">
                    View HTML elements assertions for Laravel
                </x-link>
            </li>
            <li>
                <x-link href="https://github.com/jcergolj/in-app-notifications-for-laravel" target="_blank">
                    In App Notifications for Laravel
                </x-link>
            </li>
            <li>
                <x-link href="https://github.com/jcergolj/after-action-redirect-pagination-url-for-laravel" target="_blank">Headache free redirect for Laravel</x-link>
            </li>
        </x-ul>
    </x-body>
@endsection
