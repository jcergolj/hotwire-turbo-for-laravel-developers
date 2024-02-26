@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Drive
    </x-title>

    <x-body>
        <x-subtitle class="mt-20">
            Performing Visits With a Different Method & Confirmation
        </x-subtitle>

        <x-p>
            <a href="{{route('delete') }}" data-turbo-method="delete" data-turbo-confirm="Are you sure?">Delete the account</a>
            <x-code-from-file file="code-snippets/link-confirmation.html" language="language-html" />
            @if (Session::has('status'))
                <x-p>{{ Session::get('status') }}</x-p>
            @endif
        </x-p>
    </x-body>
@endsection
