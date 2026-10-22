<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# lang

## Purpose

Strings for the installer UI only. The game itself reads `GameEngine/Lang/`.

## Key Files

| File | Description |
|------|-------------|
| `en.php` | Installer English. |
| `zh_tw.php` | Installer Traditional Chinese. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- A new installer sentence needs both files. Game UI strings do not belong here.
- Loaded through `install/lang_bootstrap.php`, not `GameEngine/Lang/loader.php`.

### Testing Requirements

- Switch installer language and reload the config step.

### Common Patterns

- PHP files returning or defining the installer string set. Keep keys in sync between `en.php` and `zh_tw.php`.

## Dependencies

### Internal

- `install/lang_bootstrap.php`, `install/templates/`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
