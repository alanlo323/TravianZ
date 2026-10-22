<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Message

## Purpose

Inbox views included by `nachrichten.php`. Despite the page file's header comment, this directory is player mail, not battle reports. Reports are `Templates/Notice/` via `berichte.php`.

## Key Files

| File | Description |
|------|-------------|
| `inbox.tpl` | Inbox list. |
| `read.tpl` | One message. |
| `write.tpl` | Compose. |
| `sent.tpl` | Sent mail. |
| `archive.tpl` | Archive. |
| `notes.tpl` | Notes. |
| `menu.tpl` | Inbox tabs. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Recipient and message body checks belong in `GameEngine/Message.php`. The template only renders the result.
- Ignore the swapped header comments on `nachrichten.php` and `berichte.php`. Follow the includes.

### Testing Requirements

- Send a message, read it, archive it, and open notes.

### Common Patterns

- `nachrichten.php` picks the template from the query string, defaulting to `inbox.tpl`.

## Dependencies

### Internal

- `nachrichten.php`, `GameEngine/Message.php`, `DatabaseMessageQueries.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
