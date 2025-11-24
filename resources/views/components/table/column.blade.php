@props(['sortable' => false, 'sorted' => false, 'direction' => 'asc'])

<th {{ $attributes->merge(
        [
            'scope' => 'col',
            'class' => 'py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-zinc-500 dark:text-white/80 sm:pl-0'
        ]
    ) }}
>
    <div 
        @class([
            'flex items-center gap-1 cursor-pointer',
            'cursor-default' => !$sortable,
            'justify-end' => $attributes->has('align') && $attributes->get('align') === 'right',
        ])
    >
        {{ $slot }}
        @if ($sortable)
            @if ($sorted)
                @if ($direction === 'asc')
                    <span class="flex flex-col">
                        <flux:icon.chevron-up class="-mb-[1px] size-3 text-zinc-700 dark:text-zinc-300 stroke-3" />
                        <flux:icon.chevron-down class="-mt-[1px] size-3 text-zinc-300 dark:text-zinc-700 stroke-3" />
                    </span>
                @else
                    <span class="flex flex-col">
                        <flux:icon.chevron-up class="-mb-[1px] size-3 text-zinc-300 stroke-3" />
                        <flux:icon.chevron-down class="-mt-[1px] size-3 text-zinc-700 stroke-3" />
                    </span>
                @endif
            @else
                <span class="flex flex-col">
                    <flux:icon.chevron-up class="-mb-[1px] size-3 text-zinc-700 stroke-3" />
                    <flux:icon.chevron-down class="-mt-[1px] size-3 text-zinc-700 stroke-3" />
                </span>
            @endif
        @endif
    </div>
</th>
