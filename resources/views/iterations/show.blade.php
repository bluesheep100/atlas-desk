<x-app>
    <a href="{{ route('iterations.tasks.create', compact('iteration')) }}" class="btn btn-primary mt-3">New Task</a>
    <ul>
        @foreach($iteration->tasks as $task)
            <li>
                <a href="{{ route('tasks.show', compact('task')) }}">{{ $task->name }}</a>
            </li>
        @endforeach
    </ul>
</x-app>
