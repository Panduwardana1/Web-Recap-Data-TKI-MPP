<div>
    @props(['active'])
{{-- toggle --}}
    @php
        $classes = $active
            ? ''
            : '';
    @endphp

    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</div>
