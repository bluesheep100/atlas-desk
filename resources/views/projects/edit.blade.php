<x-app :back="route('projects.show', compact('project'))">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header fs-5">Project</div>
                <div class="card-body">
                    <form action="{{ route('projects.update', compact('project')) }}" method="post">
                        @csrf
                        <x-forms.input name="name" :model="$project"/>

                        <button type="submit" class="btn w-100 btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header fs-5">Users</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($project->users as $user)
                            <li class="list-group-item">{{ $user->name }}</li>
                        @endforeach
                        @unset($user)
                    </ul>

                    <form action="{{ route('project.attach-user', compact('project')) }}" method="post" class="mt-3">
                        @method('PATCH')
                        @csrf
                        <x-forms.select name="user_id" label="Add User">
                            @foreach($availableUsers as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </x-forms.select>

                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>
