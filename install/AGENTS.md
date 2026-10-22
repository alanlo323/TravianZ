<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# install

## Purpose

Web installer at `/install`. It writes `GameEngine/config.php`, imports `var/db/struct.sql`, generates the world, builds croppers, and leaves `var/installed` so `index.php` stops redirecting here. Running it again stops immediately when that marker exists.

## Key Files

| File | Description |
|------|-------------|
| `process.php` | `Process` class. Handles each installer POST (`subconst` and the later steps). Raises the time limit because world generation can exceed the default. |
| `ajax_croppers.php` | Cropper-generation progress endpoint. |
| `lang_bootstrap.php` | Loads `install/lang/` before the game language loader exists. |

The installer entry `index.php` is the usual directory index for this folder.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `templates/` | Installer steps (see `templates/AGENTS.md`) |
| `include/` | Account-creation step (see `include/AGENTS.md`) |
| `lang/` | Installer-only locales (see `lang/AGENTS.md`) |
| `data/` | Config generator template (see `data/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- A new server constant must be added to `data/constant_format.tpl` and to the form that posts it. `GameEngine/config.php` is not in git.
- World generation and croppers are the slow steps. Keep batching and progress output. Do not load the whole map into one PHP array if a batch loop already exists.
- Multihunter must be able to log in after install. That account is created in `include/accounts.php`.
- Docker database host is `db`, not `localhost`.
- `constant_format.tpl` is excluded from `php -l` because of `%TOKEN%` placeholders. Do not "fix" those placeholders into PHP.

### Testing Requirements

- `./scripts/check.sh php` (the template file is skipped on purpose).
- Fresh install against Compose: open `http://localhost:8090/install`, finish config, structure, world data, and croppers, then confirm `var/installed` exists and the game root loads.

### Common Patterns

- Step templates post back to `process.php`.
- Failure before completion must not leave `var/installed` behind.

## Dependencies

### Internal

- `var/db/struct.sql` and the datagen SQL files.
- Output file `GameEngine/config.php`.

### External

- MariaDB
- PHP `mysqli`

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
