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
    <div class="card-footer">
        <div class="row">
            <div class="col-auto">
                <form action="{{ route('tasks.set-user', compact('task')) }}" method="post">
                    @method('PATCH')
                    @csrf

                    <label for="user_id" class="sr-only">User</label>
                    <div class="input-group">
                        <select name="user_id" id="user_id" class="form-select form-select-sm">
                            <option value="">--</option>
                            @foreach($task->iteration->project->users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col text-end">
                @if($task->user)
                    Assigned to: {{ $task->user->name }}
                @endif
            </div>
        </div>
    </div>
</div>
