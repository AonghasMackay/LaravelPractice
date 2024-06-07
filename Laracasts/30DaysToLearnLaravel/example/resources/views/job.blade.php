<x-layout>
    <x-slot:heading>{{ $job['title'] }}</x-slot:heading>

    <p>{{ $job['salary'] }}</p>
    <p>{{ $job['description'] }}</p>
</x-layout>