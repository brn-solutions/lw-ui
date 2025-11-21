<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\View\ComponentAttributeBag;

it('renders an info badge by default', function () {
    $view = view('lw-ui::components.badge', [
        'type' => 'info',
        'slot' => 'New',
        'attributes' => new ComponentAttributeBag(),
    ])->render();

    expect($view)->toContain('bg-sky-100');
});

it('accepts a variant type', function () {
    $view = view('lw-ui::components.badge', [
        'type' => 'success',
        'slot' => 'Ready',
        'attributes' => new ComponentAttributeBag(),
    ])->render();

    expect($view)->toContain('bg-emerald-100');
});
