<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Game

## Purpose

Small HTTP endpoint used when a Natars player names a World Wonder. It is not a general game-logic folder. Rules stay in the parent `GameEngine` classes.

## Key Files

| File | Description |
|------|-------------|
| `WorldWonderName.php` | Accepts `POST wwname` only when the current village is Natars, stores it with `$database->submitWWname()`, then redirects to `build.php?id=99`. Anyone else is sent to `dorf2.php`. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- This script includes `../Village.php` and relies on the globals that include creates. Do not turn it into a second village loader.
- Keep the Natars check. A normal player must not be able to set the WW name through this URL.
- The redirect targets are relative to `GameEngine/Game/`. Adding another `../` will break them.

### Testing Requirements

- Syntax check with `./scripts/check.sh php`.
- Manual check: Natars village, building id 99, submit a name, confirm the redirect and the stored name.

### Common Patterns

- One script, no class. Input is `$_POST['wwname']`.

## Dependencies

### Internal

- `GameEngine/Village.php` for `$village` and `$database`.
- `submitWWname()` on `MYSQLi_DB`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
