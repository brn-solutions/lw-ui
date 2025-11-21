@php
    $variants = [
        'info' => 'bg-sky-100 text-sky-800 ring-sky-200',
        'success' => 'bg-emerald-100 text-emerald-800 ring-emerald-200',
        'warning' => 'bg-amber-100 text-amber-900 ring-amber-200',
        'danger' => 'bg-rose-100 text-rose-800 ring-rose-200',
        'neutral' => 'bg-slate-100 text-slate-800 ring-slate-200',
    ];

    $classes = $variants[$type] ?? $variants['info'];
@endphp

<span {{ $attributes->merge([
    'class' => "inline-flex items-center gap-1 rounded-full px-3 py-1 text-sm font-medium ring-1 ring-inset $classes",
]) }}>
    {{ $slot }}
</span>
