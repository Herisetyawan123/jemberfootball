@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mb-3 px-3 py-2 rounded bg-teal-200 text-teal-700 hover:bg-teal-100 text-md capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500'
            : 'mb-3 px-3 py-2 rounded hover:bg-teal-100 text-md capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
