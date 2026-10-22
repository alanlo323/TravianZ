<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Admin

## Purpose

Bootstrap shared by the admin panel and by Mod scripts that are posted to directly: session helpers, CSRF, and the admin database include.

## Key Files

| File | Description |
|------|-------------|
| `csrf.php` | `csrf_token()`, `csrf_field()`, and `csrf_verify()`. Included by `Admin/admin.php` and by Mods. |
| `database.php` | Admin database bootstrap. |
| `function.php` | Shared admin helper functions. |
| `admin.php` | Older admin engine include. The panel entry point is `Admin/admin.php` one level above the repository `Admin/` folder. |
| `ajax.js` | Admin AJAX helper kept next to the engine. |
| `welcome.tpl` | Welcome markup used by the engine side. |
| `.htaccess` | Denies casual browsing of this directory. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `Mods/` | One POST action per file (see `Mods/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- CSRF helpers stay in `csrf.php`. Do not copy a second token implementation into a Mod.
- Mods include this directory's bootstrap themselves because the browser posts straight at the Mod file. A new Mod must include `csrf.php` and refuse the request when verification fails.
- Do not weaken the session cookie flags set in `Admin/admin.php`.

### Testing Requirements

- `./scripts/check.sh php`.
- A CSRF failure must redirect or stop before any `UPDATE`.

### Common Patterns

- Procedural includes, global `$database`.
- Access checks compare the session access level before the write.

## Dependencies

### Internal

- `MYSQLi_DB` and `Session` from the parent `GameEngine`.
- Views in `Admin/Templates/`.

### External

- PHP sessions

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
