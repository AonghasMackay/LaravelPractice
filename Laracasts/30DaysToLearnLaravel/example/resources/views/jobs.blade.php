<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    @foreach ($jobs as $job)
        <strong>{{ $job['title'] }}</strong>
        <p>{{ $job['salary'] }}</p>
        <p class="mb-2">{{ $job['description'] }}</p>
    @endforeach
</x-layout>
