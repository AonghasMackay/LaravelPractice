<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    @foreach ($jobs as $job)
    <a href="/jobs/{{ $job['id'] }}">
        <strong>{{ $job['title'] }}</strong>
        <p>{{ $job['salary'] }}</p>
        <p class="mb-2">{{ $job['description'] }}</p>
    </a>
    @endforeach
</x-layout>
