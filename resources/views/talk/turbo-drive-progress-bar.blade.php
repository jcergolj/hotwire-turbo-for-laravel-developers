@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Drive
    </x-title>

    <x-body>
        <x-subtitle class="mt-20">
            Displaying Progress
        </x-subtitle>

        <x-p>
            progress-bar.blade.php component

            <x-code-from-file file="resources/views/components/progress-bar.blade.php" language="language-php" />
        </x-p>

    </x-body>
@endsection
