<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# templates

## Purpose

Installer screens, in step order. Each file is included by the installer front or by `process.php` after that step's POST.

## Key Files

| File | Description |
|------|-------------|
| `menu.tpl` | Step navigation. |
| `greet.tpl` | Welcome. |
| `config.tpl` | Database and server settings form. |
| `dataform.tpl` | World-data options. |
| `wdata.tpl` | World generation step. |
| `accounts.tpl` | First-account form. |
| `script.tpl` | Shared installer script block. |
| `end.tpl` | Finished screen. Points the operator at the game root and the cron line. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Field names must match what `install/process.php` reads (`subconst` and the later step flags).
- Docker help text should say host `db` and port `3306`.
- Do not collect the database password into a template that gets committed with a real value.

### Testing Requirements

- Walk the installer from greet through end on a clean Compose stack.

### Common Patterns

- `.tpl` files with installer CSS classes (`f18`, `c5` on errors).

## Dependencies

### Internal

- `install/process.php`, `install/lang/`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
