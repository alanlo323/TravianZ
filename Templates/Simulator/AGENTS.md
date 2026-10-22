<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Simulator

## Purpose

Combat simulator partials included by `warsim.php`. Attack rows are per tribe. Defense rows include Nature (`def_4`) because oases are a defender. Result blocks show the surviving army.

## Key Files

| File | Description |
|------|-------------|
| `att_1.tpl`, `att_2.tpl`, `att_3.tpl`, `att_5.tpl`–`att_9.tpl` | Attacker unit inputs. There is no `att_4.tpl` (Nature does not attack). |
| `def_1.tpl`–`def_9.tpl` | Defender unit inputs, including Nature `def_4` and Natars `def_5`. |
| `def_end.tpl` | Closing markup for the defender block. |
| `res_1.tpl`–`res_4.tpl` | Result summary sections. |
| `res_a1.tpl`, `res_a2.tpl`, `res_a3.tpl`, `res_a5.tpl`–`res_a9.tpl` | Attacker result rows. No `res_a4.tpl`. |
| `res_d1.tpl`–`res_d9.tpl` | Defender result rows. |
| `return.tpl` | Return-trip summary. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Simulation math stays in `GameEngine/Battle.php` and `HeroBattleBonus.php`. These files only collect inputs and print outputs.
- Escape any echoed query string. `warsim.php` was a reflected-XSS site before.
- A new tribe needs an `att_`, `def_`, `res_a`, and `res_d` file and a branch in `warsim.php`.

### Testing Requirements

- Run a simulator fight for a playable tribe against Nature and against another player tribe. Compare with a real report if battle formulas changed.

### Common Patterns

- Tribe id is the filename suffix, same as `Templates/a2b/units_{id}.tpl`.

## Dependencies

### Internal

- `warsim.php`, `GameEngine/Battle.php`, `GameEngine/Data/unitdata.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
