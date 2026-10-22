<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Lang

## Purpose

Interface language files. Each locale defines constants through `tz_def()` and a legacy `$lang` array. English is the fallback for any constant a locale does not define.

## Key Files

| File | Description |
|------|-------------|
| `loader.php` | `tz_load_language()`. Loads the selected locale first, then fills missing constants and `$lang` keys from `en.php`. Rejects locale names that are not `[a-z_]+`. |
| `en.php` | Source language. Add new constants here first. |
| `zh_tw.php` | Traditional Chinese. |
| `zh.php` | Simplified Chinese. |
| `fr.php` | French. |
| `ro.php` | Romanian. |
| `es.php` | Spanish. |
| `it.php` | Italian. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Add the English constant and the translation in the same change. Contributors are asked not to ship a translation without the `en.php` key.
- Use `tz_def()` so a second include does not redefine a constant. Merge `$lang` in `loader.php`; do not rely on the array assignment being guarded inside the locale file.
- Locale code must match the filename (`zh_tw` -> `zh_tw.php`). The loader lowercases the requested code.
- Installer copy is separate: `install/lang/`. In-game copy does not read that directory.

### Testing Requirements

- `tests/LanguageLoaderTest.php` and `tests/regression/RegistrationLanguageTest.php` cover loading and registration language choice.
- Run `php tests/LanguageLoaderTest.php` or `./scripts/check.sh test`.

### Common Patterns

- Templates and pages use constants, not hardcoded English, for new UI text.
- `tests/fixtures/languages/` holds tiny stand-ins. Do not point production code at the fixtures.

## Dependencies

### Internal

- Called from session and registration when the player language is chosen.
- `install/lang/` mirrors the player-facing locales used during setup.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
