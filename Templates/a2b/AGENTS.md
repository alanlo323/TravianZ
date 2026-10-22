<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# a2b

## Purpose

Unit-picker partials for `a2b.php` (send attack, raid, or reinforcement). One file per tribe so the form only lists that tribe's ten units.

## Key Files

| File | Description |
|------|-------------|
| `units_1.tpl` | Romans. |
| `units_2.tpl` | Teutons. |
| `units_3.tpl` | Gauls. |
| `units_4.tpl` | Nature (oasis animals). |
| `units_5.tpl` | Natars. |
| `units_6.tpl` | Huns (`u51`–`u60`). |
| `units_7.tpl` | Egyptians (`u61`–`u70`). |
| `units_8.tpl` | Spartans (`u71`–`u80`). |
| `units_9.tpl` | Vikings (`u81`–`u90`). |
| `units_common.tpl` | Shared unit-row markup. |
| `attack.tpl` | Attack form around the unit rows. |
| `sendback.tpl` | Send stationed troops back. |
| `newdorf.tpl` | Settler / new village form. |
| `search.tpl` | Target village search. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- A new tribe needs `units_{tribeId}.tpl` and a branch in `a2b.php`. Tribe 4 (Nature) and tribe 5 (Natars) already have unit partials. Unit field names must match what `Units.php` and the movement insert expect.
- Keep send amounts non-negative. The server rejects the action; the template should not be the only check.

### Testing Requirements

- Send each movement type from a village of that tribe. Confirm the rally point shows the same counts.

### Common Patterns

- Included from `a2b.php` after the tribe id is known.

## Dependencies

### Internal

- `a2b.php`, `GameEngine/Units.php`, `GameEngine/Data/unitdata.php`.

### External

- Unit icons in `gpack/*/img/u/`.

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
