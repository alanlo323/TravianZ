<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# dorf3

## Purpose

Multi-village overview included by `dorf3.php`. Tabs are numbered. Players without Plus see `noplus.tpl` instead of the full overview.

## Key Files

| File | Description |
|------|-------------|
| `menu.tpl` | Tab menu. |
| `1.tpl`–`5.tpl` | Overview tabs. `dorf3.php` chooses the file by tab number. |
| `noplus.tpl` | Shown when Plus is required and inactive. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Plus gating is decided in `dorf3.php` before the include. Do not also hide the data by emptying the query.
- Each tab reads the current account's villages only.

### Testing Requirements

- Open `dorf3.php` with Plus and without Plus, with one village and with several.

### Common Patterns

- Numeric tab filenames selected by `dorf3.php`.

## Dependencies

### Internal

- `dorf3.php`, `GameEngine/Village.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
