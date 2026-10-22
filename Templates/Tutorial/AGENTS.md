<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Tutorial

## Purpose

Five-step tutorial included by `tutorial.php`.

## Key Files

| File | Description |
|------|-------------|
| `1.tpl`–`5.tpl` | Tutorial steps in order. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Step order is the filename. `tutorial.php` includes `Templates/Tutorial/{step}.tpl`.
- Quest rewards shown here must match `QuestConfig.php` if the step mentions a reward.

### Testing Requirements

- Click through all five steps on a new account.

### Common Patterns

- One step per file. No shared layout file in this directory.

## Dependencies

### Internal

- `tutorial.php`, `GameEngine/QuestConfig.php`.

### External

- Tutorial images under `img/tutorial/`.

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
