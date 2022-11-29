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
            <span class="fs-4">Iteration 1</span>
        </div>
        <div class="col-auto">
            <span class="fs-4">Fiskekage</span>
        </div>
    </div>

    <div class="row border-bottom border-secondary">

        <div class="col border-end border-secondary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quos, repellat. Ab culpa dolore ea eius
            illum necessitatibus neque nesciunt nisi quisquam temporibus? Accusantium dignissimos ea et explicabo quod,
            tenetur.
        </div>
        <div class="col border-end border-secondary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aspernatur atque beatae commodi dicta
            dolor eos est harum illo natus nihil numquam provident quasi quo, recusandae, sint tenetur voluptate.
        </div>
        <div class="col border-end border-secondary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aspernatur atque beatae commodi dicta
            dolor eos est harum illo natus nihil numquam provident quasi quo, recusandae, sint tenetur voluptate.
        </div>
        <div class="col border-end border-secondary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aspernatur atque beatae commodi dicta
            dolor eos est harum illo natus nihil numquam provident quasi quo, recusandae, sint tenetur voluptate.
        </div>
        <div class="col pt-2">
            @foreach(range(1,10) as $i)
                <div class="card mb-2">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus distinctio, eveniet
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{--    <a href="{{ route('projects.iterations.create', compact('project')) }}" class="btn btn-primary mt-3">New Iteration</a>--}}
    {{--    <ul>--}}
    {{--        @foreach($project->iterations as $iteration)--}}
    {{--            <li>--}}
    {{--                <a href="{{ route('iterations.show', compact('iteration')) }}">{{ $iteration->name }}</a>--}}
    {{--            </li>--}}
    {{--        @endforeach--}}
    {{--    </ul>--}}
</x-app>
