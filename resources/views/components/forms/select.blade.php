@props(['name', 'label' => null, 'options' => [], 'nullable' => false])

<div class="mb-3">
    <label for="{{ $name }}" class="mb-1">{{ $label ?? Str::headline($name) }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select @error($name) is-invalid @enderror">
        @if($nullable)
            <option value="">--</option>
        @endif
        @forelse($options as $option)
            <option value="{{ $option }}">
                {{ Str::headline($option) }}
            </option>
            @empty
            {{ $slot }}
        @endforelse
    </select>

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
