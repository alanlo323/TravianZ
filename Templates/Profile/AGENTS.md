<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Profile

## Purpose

Player profile views included by `spieler.php`: public profile, account settings, preferences, vacation mode, medals, and the graphic-statistics page.

## Key Files

| File | Description |
|------|-------------|
| `overview.tpl` / `profile.tpl` / `menu.tpl` / `menu2.tpl` | Profile shell and tabs. |
| `account.tpl` | Account settings. |
| `preference.tpl` | Language, time format, large map, report, and autocomplete preferences. |
| `vacation.tpl` | Vacation mode. The engine requires the nine vacation conditions before this can succeed. |
| `graphic.tpl` / `special.tpl` | Graphic statistics and special medals (artifact, WW, hero level 100, great warehouse, great granary, wall master). |
| `medal.php` | Medal image renderer. |
| `notfound.tpl` | Unknown player. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Preference writes go through `GameEngine/Profile.php`. The template posts the form; it does not update `users` itself.
- Vacation mode must keep the server-side condition check. Do not hide the button as the only gate.
- Time format display uses `Generator` helpers covered by `tests/regression/GetTimeFormatTest.php`.

### Testing Requirements

- Open own profile, another player's profile, a missing id, preferences save, and vacation when conditions fail.

### Common Patterns

- `spieler.php` selects the template from the profile tab id.

## Dependencies

### Internal

- `spieler.php`, `GameEngine/Profile.php`, `DatabaseUserQueries.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
