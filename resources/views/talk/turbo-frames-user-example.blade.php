@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Frames - User Example Code
    </x-title>
    <x-body>

    <x-subtitle>Show user</x-subtitle>
    <x-p>
        <turbo-frame id="user-{{ $user->id }}">
            {{ $user->name }} <x-link href="{{ route('users.edit', $user) }}">Edit</x-link>
        </turbo-frame>
    </x-p>

    <x-p>
        <x-link href="{{ route('users.edit', $user) }}">Full page reload - Edit User</x-link>
    </x-p>

    <x-p>
    <turbo-frame id="eager-load" src="{{ config('app.url').'/eager-load' }}">
        Loading...
    </turbo-frame>
    </x-p>
    </x-body>
@endsection
