@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Streams - Example
    </x-title>

    <x-body>
        <form method="POST" action="{{ route('turbo-stream-user-example.store') }}" class="text-left">
            <select name="action" required>
                <option>update</option>
                <option>append</option>
                <option>prepend</option>
                <option>after</option>
                <option>before</option>
                <option>remove</option>
                <option>remove all</option>
            </select>
            <x-text-input id="name" type="text" name="name" :value="old('name')" required placeholder="name" />

            <x-primary-button class="ms-3">
                Save
            </x-primary-button>
        </form>

        <div id="results" class="text-left mt-10 border">
            <x-p>Results will be displayed here based on the action</x-p>
        </div>

        <x-p>
            <form method="POST" action="{{ route('turbo-stream-user-example.store') }}" class="text-left">
                <input type="hidden" name="action" value="replace">
                <input type="hidden" name="existing" value="user-john">
                <input type="hidden" name="name" value="joe">

                <div id="replace-form">
                    <x-primary-button class="ms-3">
                        Replace john with joe
                    </x-primary-button>
                </div>
            </form>
        </x-p>
    </x-body>
@endsection
