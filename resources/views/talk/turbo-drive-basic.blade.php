@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Drive
    </x-title>

    <x-body>
        <x-subtitle>
            Basic Rendering
        </x-subtitle>

        <x-ul>
            <li>Turbo replaces contents of document's body and merges the contents of both heads.</li>
            <li>Renders preview from cache if exists.</li>
            <li>If link contains and anchor Turbo will try to scroll to it.</li>
            <li>Browser history is updated.</li>
        </x-ul>

        <div class="flex flex-col">
            <div class="basis-2/5">
                <x-code-from-file file="code-snippets/original-content.html" language="language-html" />
            </div>
            <div class="basis-auto text-center pt-5 pb-5 m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" widht="36" height="36"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
            </div>
            <div class="basis-2/5">
                <x-code-from-file file="code-snippets/new-content.html" language="language-html" />
            </div>
        </div>
    </x-body>
@endsection
