@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Drive
    </x-title>

    <x-body>
        <x-subtitle>
            Hook into Turbo events
        </x-subtitle>

        <x-ul>
            <li>turbo:click</li>
            <li>turbo:before-visit</li>
            <li>turbo:visit</li>
            <li>
                <x-link href="https://turbo.hotwired.dev/reference/events" target="_blank">
                    and many more...
                </x-link>
            </li>
        </x-ul>
        <x-code-from-file file="resources/js/app.js" start="@codesection" end="@codeendsection" language="language-javascript" />

    </x-body>
@endsection
