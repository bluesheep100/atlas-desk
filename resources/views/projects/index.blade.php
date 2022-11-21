<x-app>
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary mt-3">New project</a>
    <ul class="pt-3">
        @foreach($projects as $project)
            <li>
                <a href="{{ route('projects.show', compact('project')) }}">{{ $project->name }}</a>
            </li>
        @endforeach
    </ul>
</x-app>
