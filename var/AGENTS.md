<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# var

## Purpose

Runtime and schema data. The installer writes `var/installed` (gitignored) when setup finishes. SQL sources for that setup live in `db/`. `log/` is a runtime directory with a listing guard.

## Key Files

| File | Description |
|------|-------------|
| `.htaccess` | Blocks direct download of schema and logs. |
| `index.php` | Directory listing guard. |

`var/installed` is created by the installer and is not in git. `index.php` at the repository root redirects to `/install` while this marker is absent.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `db/` | Schema and world-generation SQL (see `db/AGENTS.md`) |
| `log/` | Runtime logs. Only a listing guard is tracked. Do not commit log contents. |
| `tools/` | Offline generators (see `tools/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- Do not commit `var/installed`, database dumps, or log files.
- Schema changes belong in `db/struct.sql` and need a note that existing servers are not migrated automatically. The README says to install fresh rather than upgrade in place.

### Testing Requirements

- After a schema change, run a clean install and confirm the new table or column exists.

### Common Patterns

- SQL is applied by `install/process.php`, not by the application on each request.

## Dependencies

### Internal

- `install/process.php` reads `db/`.
- `index.php` checks `var/installed`.

### External

- MariaDB

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
