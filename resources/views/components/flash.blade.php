@php

    $type ??= 'info';
    $value ??= '';

@endphp

<div class="alert alert-{{$type}}" role="alert">
    <strong>{{ $value }}</strong>
</div>
