<div
    {{ $attributes->merge(['class' => '']) }}
>
    <div class="flow-root">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full w-full py-2 align-middle">
                <table class="min-w-full w-full divide-y">
                    {{ $slot }}
                </table>
            </div>
        </div>

        @if ($paginate)
            {{ $paginate->links() }}
        @endif
    </div>
</div>
