@extends('layouts.talk-app')

@section('content')
    <x-title>
        Refresh Example
    </x-title>

    <x-body>
        <div data-turbo-permanent class="text-left">
            <x-text-input type="text" name="name"  required autocomplete="username" placeholder="name" />
        </div>

        <x-ul>
            @foreach($users as $user)
                <li>
                    {{ $user->name }}
                    <x-link href="{{ route('users.delete', $user) }}" data-turbo-method="delete">Delete</x-link>
                </li>
            @endforeach
        </x-ul>

        <form method="POST" action="{{ route('users.create') }}" class="text-left">
            @csrf
            <x-text-input id="name" type="text" name="name" :value="old('name')" required placeholder="name" />

            <x-primary-button class="ms-3">
                {{ __('Save') }}
            </x-primary-button>
        </form>
    </x-body>
@endsection
