<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# report

## Purpose

Admin report bodies. The filename is the report category the panel already switches on.

## Key Files

| File | Description |
|------|-------------|
| `0.tpl` | First report category. |
| `1.tpl` | Second report category. |
| `2.tpl` | Third report category. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Adding `3.tpl` does nothing until `Admin/admin.php` includes it for that type.
- Player report types in `Templates/Notice/` use a different numbering. Do not assume `1.tpl` here is the same layout as `Templates/Notice/1.tpl`.

### Testing Requirements

- Open one report of each category in the panel.

### Common Patterns

- Numeric filenames, same idea as the game notice templates, separate id space.

## Dependencies

### Internal

- `Admin/admin.php`, `Admin/Templates/Notice/all.tpl`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
