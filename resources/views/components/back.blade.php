@props(['route'])

@if($route)
    <div>
        <a href="{{ $route }}" class="btn btn-info">
            <i class="fa-solid fa-arrow-left"></i>
            Back
        </a>
    </div>
@endif
