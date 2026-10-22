<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Message

## Purpose

Admin inbox partial included when the panel shows messages.

## Key Files

| File | Description |
|------|-------------|
| `inbox.tpl` | Admin inbox rows. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- This is the panel inbox, not `Templates/Message/` (player mail).
- Escape subject and body. Message text is player input.

### Testing Requirements

- Open the admin message screen with an empty inbox and with at least one message.

### Common Patterns

- Included from `Admin/admin.php` next to `Admin/Templates/message.tpl`.

## Dependencies

### Internal

- `Admin/admin.php`, `GameEngine/Message.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
