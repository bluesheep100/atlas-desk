@props(['name', 'label', 'value' => null, 'model' => null])

<div class="form-check mb-3">
    <input type="radio" class="form-check-input @error($name) is-invalid @enderror"
           name="{{ $name }}" id="{{ $name . '_' . $value }}" value="{{ $value }}" @checked(optional($model)->{$name} === $value)>
    <label for="{{ $name . '_' . $value }}" class="form-check-label mb-1">{{ $label }}</label>

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
