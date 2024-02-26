@props(['language'])

@if($language === 'language-php')
    <div class="text-left w-7xl"><pre><code class="{{ $language }}">&lt;?php
    {{ $slot }}</code></pre></div>
@else
    <div class="text-left w-7xl"><pre><code class="{{ $language }}">{{ $slot }}</code></pre></div>
@endif
