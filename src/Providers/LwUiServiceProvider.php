<?php

namespace BrnSolutions\LwUi\Providers;

use BrnSolutions\LwUi\View\Components\Badge;
use BrnSolutions\LwUi\View\Components\Table\Cell;
use BrnSolutions\LwUi\View\Components\Table\Column;
use BrnSolutions\LwUi\View\Components\Table\Columns;
use BrnSolutions\LwUi\View\Components\Table\Row;
use BrnSolutions\LwUi\View\Components\Table\Rows;
use BrnSolutions\LwUi\View\Components\Table\Table;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class LwUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'lw-ui');

        Blade::componentNamespace('BrnSolutions\\LwUi\\View\\Components', 'lw-ui');
        Blade::component('lw-ui-badge', Badge::class);
        Blade::component('lw-ui-table', Table::class);
        Blade::component('lw-ui-table.cell', Cell::class);
        Blade::component('lw-ui-table.column', Column::class);
        Blade::component('lw-ui-table.columns', Columns::class);
        Blade::component('lw-ui-table.row', Row::class);
        Blade::component('lw-ui-table.rows', Rows::class);

        $this->callAfterResolving('blade.compiler', function (BladeCompiler $blade) {
            $blade->prepareStringsForCompilationUsing(function (string $value) {
                $patterns = [
                    '#<lw-ui:([\\w.-]+)([^>]*)/>#',
                    '#<lw-ui:([\\w.-]+)([^>]*)>#',
                    '#</lw-ui:([\\w.-]+)>#',
                ];

                $replacements = [
                    '<x-lw-ui::$1$2 />',
                    '<x-lw-ui::$1$2>',
                    '</x-lw-ui::$1>',
                ];

                return preg_replace($patterns, $replacements, $value);
            });
        });

        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/lw-ui'),
        ], 'lw-ui-views');

        $this->publishes([
            __DIR__ . '/../../resources/css' => resource_path('vendor/lw-ui'),
        ], 'lw-ui-assets');

        $this->publishes([
            __DIR__ . '/../../tailwind.preset.js' => base_path('tailwind.lw-ui.preset.js'),
        ], 'lw-ui-config');
    }
}
