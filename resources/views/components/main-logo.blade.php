@props(['class' => null])

@php
  $className = $class ? "$class main-logo" : 'main-logo';
@endphp

<a
  class="{{ $className }}"
  href="{{ route('home') }}"
>
  <img
    src="{{ asset('images/logo.svg') }}"
    width="192"
    height="40"
    alt="To the main"
    loading="lazy"
  >
</a>
