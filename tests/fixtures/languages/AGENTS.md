<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# languages

## Purpose

Fake locales for the language-loader test. `en.php` is a tiny English fallback. `xx.php` is a partial locale used to prove missing keys are filled from English.

## Key Files

| File | Description |
|------|-------------|
| `en.php` | Fixture English. Not the real `GameEngine/Lang/en.php`. |
| `xx.php` | Incomplete locale. The test expects English to supply what this file omits. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Add a key here only when a test asserts that key. Production strings belong in `GameEngine/Lang/`.
- Filename `xx.php` is intentional. The loader accepts `[a-z_]+`.

### Testing Requirements

- `php tests/LanguageLoaderTest.php`.

### Common Patterns

- Same `tz_def()` and `$lang` shape as production locales, with a few entries.

## Dependencies

### Internal

- `tests/LanguageLoaderTest.php`, `GameEngine/Lang/loader.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
