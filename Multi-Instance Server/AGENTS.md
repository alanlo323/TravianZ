<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Multi-Instance Server

## Purpose

Alternate public front for operators who host more than one TravianZ instance. It provides its own login and three-step registration page. Gameplay still uses the root `login.php`, `anmelden.php`, and `GameEngine/` of each instance.

## Key Files

| File | Description |
|------|-------------|
| `login.php` | Login page for the multi-instance front. |
| `anmelden.php` | Three-step registration wizard for that front. |
| `index.php` | Entry / listing for this folder. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `Templates/` | `indexnews.tpl` and `menu.tpl` for this front only (see `Templates/AGENTS.md`). Not the game `Templates/` tree. |

## For AI Agents

### Working In This Directory

- A registration-rule change (tribe cards, language, validation) must be applied to the root `anmelden.php` and to this copy, or the two fronts drift.
- Paths that include `GameEngine` need an extra `../` compared with the repository root. This directory is one level down.
- Do not point this front at another instance's database from a hardcoded DSN. Each instance has its own generated `config.php`.

### Testing Requirements

- Load this folder's login and registration and the root `/login.php` / `/anmelden.php`. Both should still complete.

### Common Patterns

- Copies of the root auth pages with adjusted relative includes.

## Dependencies

### Internal

- Parent `GameEngine/`, `GameEngine/Lang/`, root registration flow.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
