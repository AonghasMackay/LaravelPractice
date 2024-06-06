@props(['active' => false])

@php
    $classes = 'block px-3 py-2 rounded-md text-base font-medium';

    if($active) 
    {
        $classes .= ' bg-gray-900 text-white';
    } 
    else 
    {
        $classes .= ' text-gray-300 hover:bg-gray-700 hover:text-white';
    }
@endphp

<a {{ $attributes }} class="{{ $classes }}" aria-current="page">{{ $slot }}</a>