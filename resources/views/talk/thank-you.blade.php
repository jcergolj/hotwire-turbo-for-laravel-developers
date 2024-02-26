@extends('layouts.talk-app')

@section('content')
    <x-title>
        Thank you
    </x-title>

    <x-body>
        <img src="{{ asset('images/jcergolj.me.uk.png') }}" loading="lazy" decoding="async" width="240" height="240" class="m-auto" />
        <x-link href="https://jcergolj.me.uk">jcergolj.me.uk</x-link>
        <x-subtitle>
            Consider Hiring Me
        </x-subtitle>
        <x-ul>
            <li>Back-end oriented with 8 years of expertise in Laravel and 15 years in PHP</li>
            <li>Specialized in business process automation and 3rd party API integration</li>
            <li>Proficient in Laravel Queues/Jobs, automated testing, and CI/CD</li>
            <li>Familiar with Laravel Pint, Larastan, PHPInsights, and TLint</li>
            <li>Passionate about continuous learning and staying updated with the latest technologies</li>
            <li>Laravel Pint, Larastan, PHPInsights, TLint</li>
            <li>Ready to contribute my skills and experience to your team</li>
            <li>Plug & Code - you don't need to hold my hand; able to dive in and start coding immediately</li>
        </x-ul>
    </x-body>
@endsection
