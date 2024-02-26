@extends('layouts.talk-app')

@section('content')
    <x-title>
        <img src="{{ asset('images/jcergolj.me.uk.png') }}" loading="lazy" decoding="async" width="240" height="240" class="m-auto" />
        https://jcergolj.me.uk
    </x-title>
    <x-body>
        <x-subtitle class="flex justify-center mt-5">
            @jcergolj
        </x-subtitle>
        <x-p class="flex justify-center">
            <x-link  href="https://twitter.com/jcergolj" target="_blank">Twitter</x-link>,
            <x-link class="ml-5" href="https://github.com/jcergolj?tab=repositories" target="_blank">GitHub</x-link>,
            <x-link class="ml-5" href="https://www.linkedin.com/in/jcergolj" target="_blank">LinkedIn</x-link>
        </x-p>
    </x-body>
@endsection
