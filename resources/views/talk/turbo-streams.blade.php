@extends('layouts.talk-app')

@section('content')
    <x-title>
        Turbo Streams
    </x-title>

    <x-body>
        <x-ul>
            <li>even more control over how the fragments of HTML are displayed</li>
            <li>surgically update the DOM after a user action</li>
            <li>delivered to the browser synchronously or asynchronously</li>
            <li>
                Actions
                <x-ul>
                    <li>append</li>
                    <li>prepend</li>
                    <li>replace</li>
                    <li>update</li>
                    <li>remove</li>
                    <li>before</li>
                    <li>after</li>
                    <li>refresh -- not yet implemented in turbo laravel</li>
                </x-ul>
            </li>
            <li>caution: tracking changes of multiple turbo stream on one page could be difficult</li>
            <li>use morphing instead if possible</li>
        </x-ul>
    </x-body>
@endsection
