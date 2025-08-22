<div>
    @props(['active'])

    @php
        $classes = $active
            ? 'items-center font-medium flex bg-slate-100 text-slate-800 py-1 rounded-md gap-2 my-2 px-1 w-full'
            : 'items-center font-medium flex text-slate-800 py-1 rounded-md gap-2 my-2 px-1 w-full';
    @endphp

    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</div>
