<x-app :back="$back">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8 col-xl-6">
            <div class="card">
                @if($header)
                    <div class="card-header">
                        {{ $header }}
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ $action }}" method="post">
                        @if($method)
                            @method($method)
                        @endif
                        @csrf

                        {{ $slot }}
                    </form>

                    {{ $append }}
                </div>
            </div>
        </div>
    </div>
</x-app>
