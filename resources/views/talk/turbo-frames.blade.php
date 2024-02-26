@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Frames
    </x-title>
    <x-body>
        <x-ul>
            <li>predefined parts of a page based on ID are  updated on request</li>
            <li>contents is automatically updated after receiving a response</li>
            <li>server can provide full document, or just a fragment</li>
            <li>eager-loading frames</li>
        </x-ul>

        <x-code-from-file file="code-snippets/turbo-frame-user-edit-code-example.html" language="language-html" />
    </x-body>
@endsection
