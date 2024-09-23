<x-layout>
    <x-slot name="heading">
        (boring!!!!!)Job listings
    </x-slot>
    <h1>Hellos! from job pages!!</h1>

    <ul>

        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>