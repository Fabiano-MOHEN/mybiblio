@php
    $name ??= "";
    $type ??= "text";
    $value ??= "";
    $label ??= "";

@endphp


<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input
    type="{{$type}}"
    name="{{$name}}"
    id="{{$name}}"
    class="form-control @error($name) is-invalid @enderror"
    value="{{$value}}" required>
</div>

@error($name)
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
