<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Data

## Purpose

Static game tables included by the engine. These files define costs, times, culture points, unit stats, and hero catalogs. They are data, not request handlers.

## Key Files

| File | Description |
|------|-------------|
| `buidata.php` | Building cost and time tables (`bid*`), including World Wonder times used by Natars. |
| `unitdata.php` | Unit attack, defense, speed, cost, and upkeep for every tribe, including units `u51`–`u90`. |
| `resdata.php` | Resource field production tables. |
| `cp.php` | Culture-point values per building level. |
| `cel.php` | Town Hall celebration costs and durations. |
| `festival.php` | Mead Festival (Brewery) data. |
| `hero_full.php` | Hero level and attribute tables. |
| `hero_items.php` | T4 hero item catalog. |
| `ww_tribe.php` | Per-tribe World Wonder naming data. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Change a number here only when the game rule itself changes. Templates and admin screens read these tables indirectly through `Building`, `Units`, and `Technology`.
- A new unit needs a slot that matches `(tribe - 1) * 10 + offset`, plus a template and graphic. Do not insert an id that collides with the `+500` great-building queue offset.
- Keep array shapes stable. Callers index by level and unit id, not by a named DTO.

### Testing Requirements

- Syntax check with `./scripts/check.sh php`.
- After a cost or time edit, open the matching building or barracks screen and the combat simulator. Automation uses the same tables.

### Common Patterns

- Files assign global arrays (`$bid10`, unit arrays, and similar). They are included once from `Automation.php` or the class that owns the rule.
- No classes and no namespaces in this directory.

## Dependencies

### Internal

- Consumed by `Building.php`, `Units.php`, `Technology.php`, `Automation.php`, and hero classes.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
