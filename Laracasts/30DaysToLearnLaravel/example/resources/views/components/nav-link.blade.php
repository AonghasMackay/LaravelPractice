@props(['active' => false, 'type' => 'a'])

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

@if($type == 'a')
    <a {{ $attributes }} class="{{ $classes }}" aria-current="page">{{ $slot }}</a>
@else
    <button {{ $attributes }} class="{{ $classes }}">{{ $slot }}</button>
@endif