<?php

namespace BrnSolutions\LwUi\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public function __construct(public string $type = 'info')
    {
    }

    public function render()
    {
        return view('lw-ui::components.badge');
    }
}
