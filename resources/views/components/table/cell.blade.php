@props(['variant' => ''])

@php
    if ($attributes->has('class')) {
        $classes = explode(' ', $attributes->get('class'));
    } else {
        $classes = [
            'py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap sm:pl-0'
        ];

        if ($variant === 'strong') {
            $classes[] = 'text-white';
        }
    }

@endphp

<td {{ $attributes->class($classes) }}>
    {{ $slot }}
</td>
