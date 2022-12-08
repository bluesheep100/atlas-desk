@props(['task'])

<div class="card my-2">
    <div class="card-header">
        {{ $task->name }}
        <a href="{{ route('tasks.edit', compact('task')) }}"
           class="btn btn-sm btn-primary float-end">
            <i class="fa-solid fa-edit"></i>
        </a>
    </div>
    <div class="card-body">
        {{ $task->description }}
    </div>
</div>
