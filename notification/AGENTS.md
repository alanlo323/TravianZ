<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# notification

## Purpose

Standalone notification skin, separate from the game gpacks. It has its own layout images, round-box chrome, and a small language set. The game does not load these strings through `GameEngine/Lang/loader.php`.

## Key Files

None at this level beyond the usual listing guard.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `lang/` | Notification locales: `en.php`, `fr.php`, `it.php`, `ro.php`, `zh.php`. No `zh_tw.php` here. |
| `gpack/notification_v1_zzjhons/` | Skin images (layout, round boxes, buttons, screens). Image leaves have no `AGENTS.md`. |
| `img/` | Extra notification images. |

## For AI Agents

### Working In This Directory

- Add a notification string in `lang/en.php` and the other files in `lang/`. Do not add it only to `GameEngine/Lang/`.
- Button and box states are separate image folders (`gray`, `green`, `orange`, `red`, `disabled`). A new state needs the same slot in each size that already exists (`button` and `button/*-small`).

### Testing Requirements

- Open the notification screen in each supported locale after a string change.

### Common Patterns

- `index.php` listing guards. Skin path is `gpack/notification_v1_zzjhons/`.

## Dependencies

### Internal

- Notification pages that include this tree. Not used by `dorf1.php` or `build.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
