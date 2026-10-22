<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# .github

## Purpose

GitHub automation. The only workflow lints PHP, runs the zero-dependency tests, and validates Docker Compose.

## Key Files

None at this level.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `workflows/` | `quality.yml` (see `workflows/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- Keep the workflow command equal to `scripts/check.sh`. A new check belongs in `check.sh` first, then as an extra step only if it needs a different runner.
- `permissions: contents: read` is enough. Do not add write tokens.

### Testing Requirements

- `./scripts/check.sh php` locally matches the `php` job.
- Compose validation needs Docker, which the `compose` job already has on `ubuntu-latest`.

### Common Patterns

- One workflow, two jobs, `fail-fast: false` on the PHP matrix.

## Dependencies

### Internal

- `scripts/check.sh`, `tests/`, `docker-compose.yml`.

### External

- GitHub Actions
- `shivammathur/setup-php@v2`

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
