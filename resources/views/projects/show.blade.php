<x-app :fluid="true">
    <div class="row border border-secondary">
        <div class="col-auto pe-0">
            <a href="#" class="btn">
                <i class="fa-solid fa-angle-left fs-4"></i>
            </a>
        </div>
        <div class="col-auto">
            <a href="#" class="btn ">
                <i class="fa-solid fa-angle-right fs-4"></i>
            </a>
        </div>
        <div class="col">
            @if($iteration)
                <span class="fs-4">{{ $iteration->name }}</span>
            @endif

            <a href="{{ route('projects.iterations.create', compact('project')) }}"
               class="btn  btn-link btn-sm p-0 align-baseline">
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="col-auto">
            <span class="fs-4">{{ $project->name }}</span>

            <a href="{{ route('projects.edit', compact('project')) }}"
               class="btn btn-sm text-info float-end">
                <i class="fa-solid fa-edit"></i>
            </a>
        </div>
    </div>

    <div class="row border-bottom border-secondary">
        <div class="col border-end border-secondary">
            @if($iteration)
                @foreach($iteration->tasks as $task)
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
                @endforeach
            @endif
        </div>

        <div class="col border-end border-secondary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quos, repellat. Ab culpa dolore ea eius
            illum necessitatibus neque nesciunt nisi quisquam temporibus? Accusantium dignissimos ea et explicabo quod,
            tenetur.
        </div>
        <div class="col border-end border-secondary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aspernatur atque beatae commodi dicta
            dolor eos est harum illo natus nihil numquam provident quasi quo, recusandae, sint tenetur voluptate.
        </div>
        <div class="col">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aspernatur atque beatae commodi dicta
            dolor eos est harum illo natus nihil numquam provident quasi quo, recusandae, sint tenetur voluptate.
        </div>
    </div>
</x-app>
