<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# php

## Purpose

PHP settings applied on top of the production `php.ini` inside the Apache image. Errors stay out of the HTML response and go to the server log.

## Key Files

| File | Description |
|------|-------------|
| `zz-travianz.ini` | Overrides copied to `$PHP_INI_DIR/conf.d/zz-travianz.ini` by the Dockerfile. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Keep `display_errors` off. The game logs through `App\Utils\DebugErrorLogger` and the admin debug screen.
- Raising `memory_limit` or `max_execution_time` here affects every request, including the installer. World generation already calls `set_time_limit(0)` in `install/process.php`.

### Testing Requirements

- Rebuild the `web` image and confirm `php -i` inside the container shows the override.

### Common Patterns

- One ini file. Filename sorts after the default snippets.

## Dependencies

### Internal

- Root `Dockerfile` `COPY docker/php/zz-travianz.ini`.

### External

- PHP 8.3 Apache image

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
