<x-app>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h1>Projects</h1>
                    <a href="{{ route('projects.create') }}" class="btn btn-primary mt-3">New project</a>
                    <ul class="py-3 list-group">
                        @foreach($projects as $project)
                            <li class="list-group-item">
                                <a href="{{ route('projects.show', compact('project')) }}">{{ $project->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="row">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger">Log out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
