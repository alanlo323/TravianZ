<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# tools

## Purpose

Offline generators that are not part of a page request.

## Key Files

| File | Description |
|------|-------------|
| `generate_hero_sprites.php` | Builds hero sprite assets from the source art. Run from the CLI when hero images change. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- This script writes image files. Run it only when sprite inputs changed, and review the generated images before committing them.
- Do not include it from `Automation.php` or from a web page.

### Testing Requirements

- `php -l var/tools/generate_hero_sprites.php`.
- A full run needs the sprite inputs and a writable image directory. Skip the run when the change does not touch hero art.

### Common Patterns

- CLI PHP, not a class.

## Dependencies

### Internal

- Hero image paths under `img/hero/` and `gpack/`.

### External

- PHP `gd`

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
