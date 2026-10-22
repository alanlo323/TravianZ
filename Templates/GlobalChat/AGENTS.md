<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# GlobalChat

## Purpose

Server-wide world chat widget and the button that shares a battle report into that chat. Alliance chat is `Templates/Alliance/chat.tpl`, not this folder.

## Key Files

| File | Description |
|------|-------------|
| `widget.tpl` | World chat panel. |
| `share_report_button.tpl` | Included by `berichte.php` on a single report. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Messages are stored by `DatabaseGlobalChatQueries`. Moderation actions stay in that trait and the admin tools.
- Do not mix this with alliance chat (`chat.php` / `Templates/Alliance/chat.tpl`).

### Testing Requirements

- Post a world-chat line and share a report. Confirm the report link opens `berichte.php` for that id only.

### Common Patterns

- Small partials included by the page shell and by `berichte.php`.

## Dependencies

### Internal

- `DatabaseGlobalChatQueries.php`, `berichte.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
