<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Entity

## Purpose

Small domain objects in `App\Entity`. The live player used by page scripts is still the `Session` and `Village` globals. `User` is the typed profile object, not a replacement for those globals.

## Key Files

| File | Description |
|------|-------------|
| `User.php` | `App\Entity\User`. Id, username, and account fields. Depends on `IDbConnection` and `App\Utils\Math`. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Add a property here when a caller needs a typed user. Do not duplicate session login logic.
- Keep persistence in `DatabaseUserQueries`. This class should not open SQL of its own if a trait method already loads the row.

### Testing Requirements

- `./scripts/check.sh php`.

### Common Patterns

- Private fields, constructor injection of `IDbConnection`.

## Dependencies

### Internal

- `App\Database\IDbConnection`
- `App\Utils\Math`

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
