<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# docker

## Purpose

Image-side PHP configuration for the Compose `web` service. The Dockerfile at the repository root builds `php:8.3-apache`, installs `gd`, `mysqli`, `pdo_mysql`, and `zip`, and enables `rewrite` and `headers`. Source is bind-mounted; this directory is what the image copies in.

## Key Files

None at this level.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `php/` | PHP ini overrides copied to `conf.d` (see `php/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- A new PHP extension belongs in the root `Dockerfile`, then a rebuild (`docker compose up -d --build`).
- Do not bake the game source into the image. Compose mounts the working tree at `/var/www/html`.
- Host port is `8090` in `docker-compose.yml`.

### Testing Requirements

- `./scripts/check.sh compose` validates the Compose file.
- `tests/docker-compose-contract.sh` pins services and ports.

### Common Patterns

- Ini files use the `zz-` prefix so they load after the production defaults.

## Dependencies

### Internal

- Root `Dockerfile`, `docker-compose.yml`.

### External

- Docker

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
