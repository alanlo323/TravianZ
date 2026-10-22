<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# tests

## Purpose

Zero-dependency checks. PHP tests are plain scripts (`php tests/FooTest.php`), not PHPUnit. They must pass without a database. Shell tests check the Compose contract. `scripts/check.sh` discovers every `*Test.php` and every `*.sh` under this tree.

## Key Files

| File | Description |
|------|-------------|
| `LanguageLoaderTest.php` | `tz_load_language()` fills missing constants and `$lang` keys from English. Uses `fixtures/languages/`. |
| `MultisortTest.php` | `GameEngine/Multisort.php` ordering. |
| `docker-compose-contract.sh` | Asserts the Compose file still exposes the expected services and ports. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `regression/` | Engine behavior pinned without a live server (see `regression/AGENTS.md`) |
| `fixtures/` | Tiny stand-in data for the tests above (see `fixtures/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- A new test file must end in `Test.php` or `check.sh` will not run it. Exit non-zero on failure.
- Do not connect to MariaDB. If the code calls `mysqli_query`, follow `regression/GetResearchingCacheTest.php`: re-exec with `disable_functions=mysqli_query` and stub the function.
- Keep fixtures free of real player data and secrets.
- `install/data/constant_format.tpl` is skipped by the PHP linter because it is a generator template full of `%TOKEN%` placeholders. Tests must not expect that file to parse as PHP.

### Testing Requirements

- `./scripts/check.sh test` from the repository root.
- CI runs `./scripts/check.sh php` on PHP 8.3, 8.4, and 8.5.

### Common Patterns

- `fail_*` helpers write to STDERR and `exit(1)`.
- `require_once` the single production file under test. Do not boot `index.php`.

## Dependencies

### Internal

- Production files under `GameEngine/`, `src/`, and `install/`.

### External

- PHP CLI
- A POSIX shell for `docker-compose-contract.sh`

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
