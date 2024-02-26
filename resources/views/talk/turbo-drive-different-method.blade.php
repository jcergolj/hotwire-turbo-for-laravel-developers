@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Drive
    </x-title>

    <x-body>
        <x-subtitle>
            Performing Visits With a Different Method
        </x-subtitle>

        <x-p>
            <a href="{{route('delete') }}" data-turbo-method="delete">Delete the account</a>

            @if (Session::has('status'))
                <x-p>{{ Session::get('status') }}</x-p>
            @endif

            <x-code-from-file file="routes/web.php" start="@codesection-delete" end="@endcodesection-delete" language="language-php" />

            <x-code-from-file file="code-snippets/link.html" language="language-html" />
        </x-p>
    </x-body>
@endsection
