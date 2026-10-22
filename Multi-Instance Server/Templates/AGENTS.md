<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Templates

## Purpose

Views for the multi-instance login front only. The game views are in the repository `Templates/` directory, not here.

## Key Files

| File | Description |
|------|-------------|
| `indexnews.tpl` | News block on this front's index. |
| `menu.tpl` | Menu for the multi-instance login and registration pages. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Include paths are relative to `Multi-Instance Server/`. Do not reuse a root template include such as `Templates/header.tpl` without adding `../`.
- Player-facing game chrome stays in the repository `Templates/` tree.

### Testing Requirements

- Load the multi-instance login page and confirm the menu and news block render.

### Common Patterns

- Two partials, included by `login.php` and `anmelden.php` in the parent directory.

## Dependencies

### Internal

- `Multi-Instance Server/login.php`, `Multi-Instance Server/anmelden.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
