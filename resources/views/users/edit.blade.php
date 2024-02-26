@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Frames - User Example Code
    </x-title>
    <x-body>
        <h1>Edit User</h1>
        <turbo-frame id="user-{{ $user->id }}" target="_top">
            <form method="post" action="{{ route('users.update', $user) }}">
                @csrf
                @method('patch')
                <x-text-input type="text" name="name" value="{{ $user->name }}" />
                <x-primary-button>
                    Save
                </x-primary-button>
                <x-link href="{{ to_route('turbo-frames-user-example')->getTargetUrl() }}" data-turbo-frame="_top">Cancel</x-link>
            </form>
        </turbo-frame>
    </x-body>
@endsection
