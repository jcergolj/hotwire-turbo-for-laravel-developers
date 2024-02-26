@extends('layouts.talk-app')

@section('content')
    <x-title>
        Morphing
    </x-title>

    <x-body>
        <x-ul>
            <li>replaces only part of the body content</li>
            <li><x-link href="https://github.com/bigskysoftware/idiomorph">https://github.com/bigskysoftware/idiomorph</x-link></li>
        </x-ul>

        <x-code-from-file file="code-snippets/morphing.html" language="language-html" />

        <x-p>
         <video controls class="mt-10 grid w-full">
            <source src="https://d2biiyjlsh52uh.cloudfront.net/dev/assets/videos/a-happier-happy-path-in-turbo-with-morphing/refresh-comparison.mp4" type="video/mp4">
        </video>
        <div class="text-center">source: https://dev.37signals.com/a-happier-happy-path-in-turbo-with-morphing</div>
        </x-p>
    </x-body>
@endsection
