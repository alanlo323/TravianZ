<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Forum

## Purpose

Alliance forum partials included by `Templates/Alliance/forum*.tpl`. Posts and polls are stored through `DatabaseForumQueries`.

## Key Files

| File | Description |
|------|-------------|
| `forum_1.tpl` through `forum_10.tpl` | Forum screens by action id. The number matches the branch `allianz.php` already uses. There is no separate poll template. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Keep action numbers aligned with `allianz.php`. Do not renumber a file without the matching branch.
- BBCode output goes through `GameEngine/BBCode.php`. Do not print raw post HTML.

### Testing Requirements

- Create a topic and a reply as a member who has forum rights. Poll storage still exists on `DatabaseForumQueries`; this folder has no dedicated poll template.

### Common Patterns

- Numeric filenames match the forum action, same as report templates.

## Dependencies

### Internal

- `Templates/Alliance/forum.tpl`, `GameEngine/BBCode.php`, `DatabaseForumQueries.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
