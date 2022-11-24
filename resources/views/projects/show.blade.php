<x-app>
    <a href="{{ route('projects.iterations.create', compact('project')) }}" class="btn btn-primary mt-3">New Iteration</a>
    <ul>
        @foreach($project->iterations as $iteration)
            <li>
                <a href="{{ route('iterations.show', compact('iteration')) }}">{{ $iteration->name }}</a>
            </li>
        @endforeach
    </ul>
</x-app>
