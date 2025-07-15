@props([
    'desktop',
    'mobile',
    'alt' => '',
    'height' => '5rem',
    'mobileHeight' => '10rem',
    'class' => '',
])

<img
    src="{{ asset($desktop) }}"
    class="img-fluid mx-auto d-none d-md-block {{ $class }}"
    style="height: {{ $height }};"
    alt="{{ $alt }}"
>
<img
    src="{{ asset($mobile) }}"
    class="img-fluid mx-auto d-block d-md-none {{ $class }}"
    style="height: {{ $mobileHeight }};"
    alt="{{ $alt }}"
>