@extends('layouts.talk-app')

@section('content')
    <x-title>
        User Example - Code
    </x-title>

    <x-body>
        <x-code-from-file file="routes/web.php" language="language-php" start="@codesection-users-example" end="@endcodesection-users-example" />
    </x-body>
@endsection
