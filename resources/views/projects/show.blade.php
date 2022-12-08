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
        <div class="col text-center border-end border-secondary pt-2">
            <h4>Open</h4>
        </div>
        <div class="col text-center border-end border-secondary pt-2">
            <h4>In Progress</h4>
        </div>
        <div class="col text-center border-end border-secondary pt-2">
            <h4>On Hold</h4>
        </div>
        <div class="col text-center pt-2">
            <h4>Closed</h4>
        </div>
    </div>
    <div class="row border-bottom border-secondary">
        @if($iteration)
            <div class="col border-end border-secondary">
                @foreach($iteration->tasks()->status('open')->get() as $task)
                    <x-task :task="$task"/>
                @endforeach
            </div>

            <div class="col border-end border-secondary">
                @foreach($iteration->tasks()->status('progress')->get() as $task)
                    <x-task :task="$task"/>
                @endforeach
            </div>
            <div class="col border-end border-secondary">
                @foreach($iteration->tasks()->status('hold')->get() as $task)
                    <x-task :task="$task"/>
                @endforeach
            </div>
            <div class="col">
                @foreach($iteration->tasks()->status('closed')->get() as $task)
                    <x-task :task="$task"/>
                @endforeach
            </div>
        @else
            <div class="col text-center">
                No iterations found.
            </div>
        @endif
    </div>
</x-app>
