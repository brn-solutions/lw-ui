<?php

namespace BrnSolutions\LwUi\Providers;

use BrnSolutions\LwUi\View\Components\Badge;
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
