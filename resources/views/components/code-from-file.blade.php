@props(['file', 'start' => null, 'end' => null, 'language'])

@php
    $code = Str::of(htmlspecialchars(file_get_contents(base_path($file))));

    if ($start !== null) {
        $code = $code->after("// {$start}");
    }

    if ($end !== null) {
        $code = $code->before("// {$end}");
    }
@endphp

<div class="text-left grid grid grid-cols-1">
    <pre><code class="{{ $language }}">{!! $code  !!}</code></pre>
</div>
