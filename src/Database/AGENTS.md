<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Database

## Purpose

Connection contract for the database layer. The concrete implementation is `MYSQLi_DB` in `GameEngine/Database.php`, not a class in this folder.

## Key Files

| File | Description |
|------|-------------|
| `IDbConnection.php` | `App\Database\IDbConnection`. Requires `connect()`, `disconnect()`, `reconnect()`, and a connected-state check. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Extend the interface only when every implementation, including `MYSQLi_DB`, grows the same method in the same change.
- Query methods stay on the traits in `GameEngine/Database/`. This interface is the connection lifecycle only.

### Testing Requirements

- Syntax check. There is no second database driver in the repo to compile against.

### Common Patterns

- `class MYSQLi_DB implements IDbConnection`.

## Dependencies

### Internal

- Implemented by `GameEngine/Database.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
