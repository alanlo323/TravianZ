<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Anleitung

## Purpose

Instruction pages included by `anleitung.php`. Short static chapters, separate from the larger manual in `Templates/Manual/`.

## Key Files

| File | Description |
|------|-------------|
| `0.tpl` | Instructions index. |
| `1.tpl` / `3.tpl` / `4.tpl` | Chapters. There is no `2.tpl`. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Keep chapter ids stable. `anleitung.php` includes these numbers directly.
- Do not move this content into `Templates/Manual/` without updating `anleitung.php` and `manual.php`.

### Testing Requirements

- Open `anleitung.php` for each id, including a missing id.

### Common Patterns

- Numeric filenames with gaps.

## Dependencies

### Internal

- `anleitung.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
