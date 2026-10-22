<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# regression

## Purpose

Narrow pins for engine behavior that used to regress. Each file loads one production file and asserts a result. No web server and no database.

## Key Files

| File | Description |
|------|-------------|
| `GetResearchingCacheTest.php` | Researching-cache reads on `DatabaseTroopQueries` issue one query per key. Stubs `mysqli_query` by re-running under `disable_functions`. Sets `TB_PREFIX` to `test_`. |
| `GetTimeFormatTest.php` | Time-format output used by preferences and `Generator`. |
| `RegistrationLanguageTest.php` | Registration wizard keeps a valid locale and falls back otherwise. |
| `ServerStartTimeTest.php` | Server-start timestamps through `App\Utils\DateTime` across timezones (Lisbon, UTC, Kathmandu). Imports it as `TravianDateTime` so it does not collide with PHP `DateTime`. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Add a regression here when a pure function or a cache guard can be called without `config.php`.
- The mysqli stub pattern in `GetResearchingCacheTest.php` is the one to copy. Do not point tests at the developer's database.
- Assert the observable result (query count, timestamp, locale), not private source layout.

### Testing Requirements

- `php tests/regression/NameTest.php` must print nothing and exit 0 on success.
- `./scripts/check.sh php` runs all four.

### Common Patterns

- Top-level script, not a class framework. A local harness class is fine when it isolates traits.

## Dependencies

### Internal

- `GameEngine/Database/DatabaseTroopQueries.php`
- `src/Utils/DateTime.php`
- `GameEngine/Lang/loader.php` and registration helpers

### External

- PHP CLI only

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
