<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# workflows

## Purpose

CI definition for pull requests and pushes to `master`.

## Key Files

| File | Description |
|------|-------------|
| `quality.yml` | Job `php` runs `./scripts/check.sh php` on PHP 8.3, 8.4, and 8.5. Job `compose` runs `./scripts/check.sh compose` and `./scripts/check.sh shell`. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Bump the PHP matrix when the project drops or adds a version. The README target is 8.3+.
- `actions/checkout@v4` and `setup-php@v2` are the current actions. Keep `coverage: none`.
- Shell contract tests run in the Compose job because they do not need a PHP matrix.

### Testing Requirements

- After editing the workflow, read it against `scripts/check.sh` usage (`php`, `compose`, `shell`). A typo in the argument fails the job with the script's usage text.

### Common Patterns

- `on: pull_request` and `push` to `master` only.

## Dependencies

### Internal

- `scripts/check.sh`.

### External

- GitHub-hosted `ubuntu-latest`

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
