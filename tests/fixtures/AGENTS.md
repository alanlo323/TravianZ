<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# fixtures

## Purpose

Stand-in data for tests. Nothing here is loaded by the game.

## Key Files

None at this level.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `languages/` | Minimal locale files for `LanguageLoaderTest.php` (see `languages/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- Keep fixtures smaller than production data. A fixture that copies `GameEngine/Lang/en.php` will hide fallback bugs.
- Do not import this directory from `GameEngine/` or from a page script.

### Testing Requirements

- Covered by the test that loads the fixture.

### Common Patterns

- PHP files that define the same shape as production (`tz_def`, `$lang`) with a handful of keys.

## Dependencies

### Internal

- Consumed by `tests/LanguageLoaderTest.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
