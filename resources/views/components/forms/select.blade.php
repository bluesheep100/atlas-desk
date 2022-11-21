@props(['name', 'options', 'nullable' => false])

<div class="mb-3">
    <label for="{{ $name }}" class="mb-1">{{ Str::headline($name) }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="form-select @error($name) is-invalid @enderror">
        @if($nullable)
            <option value="">--</option>
        @endif
        @foreach($options as $option)
                <option value="{{ $option }}">
                    {{ Str::headline($option) }}
                </option>
        @endforeach
    </select>

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
