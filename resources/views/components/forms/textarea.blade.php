@props(['name', 'rows' => 6, 'model' => null])

<div class="mb-3">
    <label for="{{ $name }}" class="mb-1">{{ Str::headline($name) }}</label>
    <textarea name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
              id="{{ $name }}" rows="{{ $rows }}">{{ old($name, optional($model)->{$name}) }}</textarea>

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
