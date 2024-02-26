@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Streams - User Example Back End Code
    </x-title>

    <x-body>
        <x-p>
            See: <x-link href="https://turbo-laravel.com/docs/1.x/turbo-streams">Turbo Streams</x-link>
        </x-p>
        <x-code-from-file file="routes/web.php" language="language-php" start="@codesection-turbo-stream-user-example" end="@endcodesection-turbo-stream-user-example" />
    </x-body>
@endsection
