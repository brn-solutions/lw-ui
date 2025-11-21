# lw-ui

Reusable Laravel UI components built for Livewire 3 and Tailwind CSS 4 by brn-solutions.

## Installation
- Add the package: `composer require brn-solutions/lw-ui`.
- Publish views/assets when you need to override: `php artisan vendor:publish --tag=lw-ui-views` or `--tag=lw-ui-assets`.
- Publish the Tailwind preset if you want to customize locally: `php artisan vendor:publish --tag=lw-ui-config` (copies `tailwind.lw-ui.preset.js`).

## Usage
Render the badge component in Blade:

```blade
<lw-ui:badge type="success">New</lw-ui:badge>
```

Variants: `info` (default), `success`, `warning`, `danger`, `neutral`. Pass additional classes via standard attributes.

## Tailwind preset
In your app `tailwind.config.js`:

```js
import preset from './tailwind.lw-ui.preset.js'

export default {
  presets: [preset],
  content: ['./resources/views/**/*.blade.php', './vendor/brn-solutions/lw-ui/resources/views/**/*.blade.php'],
}
```

Optionally import shared CSS helpers (focus ring, transitions) from `resources/vendor/lw-ui/lw-ui.css` after publishing.

## Local development
- Install dependencies: `composer install` (npm is only needed if you add JS/CSS tooling; current package ships raw CSS and a Tailwind preset).
- Lint PHP: `composer lint`.
- Run tests: `composer test` (Pest + Testbench).

## Releasing
- Update changelog and tag a version (e.g., `v0.1.0`).
- Ensure build assets and presets are up to date before tagging.
