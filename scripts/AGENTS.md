<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# scripts

## Purpose

Local quality gate used by developers and by `.github/workflows/quality.yml`. One bash script, several subcommands.

## Key Files

| File | Description |
|------|-------------|
| `check.sh` | `all` (default) lints PHP, runs PHP tests, validates Compose, and runs shell tests. Subcommands: `php`, `lint`, `test`, `shell`, `compose`. |

`php` and `lint` run `php -l` on tracked `*.php` and `*.tpl` files and skip `install/data/constant_format.tpl`. `test` runs `tests/**/*Test.php` plus shell tests. `compose` runs `docker compose config --quiet`.

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Extend `check.sh` instead of adding a second entry script, so CI and the README stay on one command.
- The script uses `git ls-files`. Untracked tests are not executed until they are added to the index.
- On Windows, run it from Git Bash or from the `web` container. PowerShell will not execute the bash script directly.

### Testing Requirements

- `./scripts/check.sh php` is the default check before a gameplay change.
- `./scripts/check.sh compose` needs Docker.

### Common Patterns

- `set -euo pipefail`. Each mode is a function plus a `case` arm.

## Dependencies

### Internal

- `tests/`, `docker-compose.yml`.

### External

- PHP CLI
- Docker, only for `compose` and `all`
- bash

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
