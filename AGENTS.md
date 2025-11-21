# Repository Guidelines

## Project Structure & Module Organization
- `src/Providers` houses the service provider that registers Blade/Livewire namespaces and publishes assets.
- `src/View/Components` holds lightweight Blade components; Livewire components go in `src/Livewire` when interactivity is needed.
- `resources/views/components` contains component views (e.g., `badge.blade.php`); keep props minimal and documented inline.
- `resources/css` stores shared Tailwind tokens/presets shipped with the package; avoid app-specific styles here.
- `tests` contains unit/component tests; prefer Pest or PHPUnit with fixtures under `tests/Fixtures`. Add `examples/` if you need a demo Laravel app.

## Build, Test, and Development Commands
- `composer install` — install PHP dependencies for local development.
- `composer lint` — run Laravel Pint (or equivalent) for formatting; add new rules in `pint.json` if needed.
- `composer test` — execute the test suite (Pest/PHPUnit). Keep it fast and isolated from a full Laravel app.
- `npm install && npm run build` — rebuild any shared CSS/JS assets (if present) before tagging a release.

## Coding Style & Naming Conventions
- Follow PSR-12 and Laravel conventions: 4-space indent, snake_case Blade props, and PascalCase classes.
- Blade components: name as `<lw-ui:component-name>` matching class names like `ComponentName.php` and view files `component-name.blade.php`.
- Keep public props typed and defaulted; prefer value objects over arrays for config-heavy components.
- Tailwind: favor utility-first classes; keep variant palettes in a central `tokens` or `preset` file.

## Testing Guidelines
- Write component tests that render Blade/Livewire output and assert markup, classes, and slots.
- Name tests after behavior (e.g., `BadgeDisplaysSlotTest.php`); organize by component.
- Add snapshot tests only for stable markup; avoid brittle class-order assertions.

## Commit & Pull Request Guidelines
- Commits: present-tense, concise subjects (e.g., `Add badge component presets`). Squash fixups before opening a PR.
- PRs: include a summary, screenshots or rendered HTML snippets for UI changes, and mention any breaking changes or new publishable assets.
- Link related issues; request review when tests, lint, and build steps are green. Tag a semantic version once merged.
