<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# goldClub

## Purpose

Gold Club views: farm lists and the troop picker used when adding a raid. Included from the Plus / Gold Club flow and from `crop_finder.php`.

## Key Files

| File | Description |
|------|-------------|
| `farmlist.tpl` | Farm-list overview. |
| `farmlist_add.tpl` | Create a list. |
| `farmlist_addraid.tpl` | Add a raid target. |
| `farmlist_editraid.tpl` | Edit a raid target. |
| `trooplist.tpl` | Troops sent with the farm-list raid. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Farm-list rows are written by `DatabaseMovementQueries`. Keep target village and troop counts server-validated.
- This is a paid feature. Gating stays in the Plus / gold check, not only in a hidden link.

### Testing Requirements

- Create a list, add a raid, edit it, and start it with a village that owns those troops.

### Common Patterns

- Included partials, same globals as `Templates/a2b/`.

## Dependencies

### Internal

- `crop_finder.php`, `DatabaseMovementQueries.php`, `GameEngine/GoldShop.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
