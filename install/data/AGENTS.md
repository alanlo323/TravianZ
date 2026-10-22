<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# data

## Purpose

Generator template for `GameEngine/config.php`. The installer replaces `%TOKEN%` placeholders and writes the result outside this directory. The template itself is not executed.

## Key Files

| File | Description |
|------|-------------|
| `constant_format.tpl` | PHP config skeleton: database, table prefix, server speed, cron, IP-ban, and feature-flag constants. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Add a constant here when the game needs a new server setting. Wire the same name through `install/process.php` and the config form.
- Leave `%TOKEN%` placeholders intact. `scripts/check.sh` skips this file in `php -l` for that reason.
- Existing installs do not pick up a new constant until config is regenerated or the admin settings writer (`GameEngine/Admin/Mods/config_template.php`) also emits it.

### Testing Requirements

- Install once on a clean database and confirm the new constant exists in the generated `GameEngine/config.php`.
- Do not add this file to the lint set without a preprocess step.

### Common Patterns

- One template, token replacement, write to `GameEngine/config.php`.

## Dependencies

### Internal

- `install/process.php`, `GameEngine/Admin/Mods/config_template.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
