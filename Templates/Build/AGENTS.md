<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Build

## Purpose

Building screens included by `build.php`. The filename is the building id (`gid`). `build.php` includes `Templates/Build/{id}.tpl` for the slot the player opened. Sub-views use a suffix (`26_menu.tpl`, `44_train.tpl`).

## Key Files

| File | Description |
|------|-------------|
| `{gid}.tpl` | Main screen for that building. Files exist for gids 1–39 and 41–50. There is no `40.tpl`. |
| `{gid}_{suffix}.tpl` | Tabs of the same building: `_train`, `_menu`, `_create`, `_progress`, `_upgrades`, and numbered steps. |
| `16_incomming.tpl` / `16_walking.tpl` / `16_troops.tpl` / `16_menu.tpl` | Rally-point movement tabs. Filename keeps the historical `incomming` spelling. |
| `37_hero.tpl` / `37_items.tpl` / `37_adventures.tpl` / `37_auction.tpl` / `37_revive.tpl` / `37_train.tpl` / `37_t4nav.tpl` / `37_land.tpl` | Hero's Mansion and the T4 hero tabs. |
| `44.tpl` / `44_train.tpl` / `44_2.tpl` / `44_3.tpl` / `44_4.tpl` | Huns Command Center, which replaces Residence and Palace. |
| `42.tpl`–`50.tpl` | v11 buildings (Hospital family, Great Workshop, tribe walls, and related gids). Confirm the gid in `Building.php` before renaming. |
| `avaliable.tpl` / `next.tpl` / `upgrade.tpl` / `train_bonus.tpl` | Build-menu, next-level, upgrade, and training-bonus partials in this directory. |
| `ww.tpl` / `wwupgrade.tpl` | World Wonder screen (`build.php?id=99`) and its upgrade block. |
| `avaliable/*.tpl` | Buildings the player is allowed to place. Directory name is spelled `avaliable`. |
| `soon/*.tpl` | Locked-building partials (walls, resource boosters, palace, barracks). |

`avaliable/` includes one file per placeable building: barracks, academy, residence, palace, workshop, hospital, walls (stone, defensive, makeshift, barricade), great warehouse, great granary, and the rest of the build menu. `soon/` mirrors the locked state.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `avaliable/` | "You can build this" partials. Spelling is intentional. |
| `soon/` | Locked-building partials. |

No separate `AGENTS.md` in those two folders. They only hold one partial per building.

## For AI Agents

### Working In This Directory

- Add a building by gid: requirement row in `Building.php`, data in `GameEngine/Data/buidata.php`, this template, and an `avaliable/` partial. Renaming a file without updating `build.php`'s include will 500.
- Huns reach the Stonemason's Lodge through Command Center level 3 or higher. Romans, Teutons, and Gauls still use Residence or Palace. Do not offer Residence to Huns.
- Tribe walls differ: Makeshift (Huns), Stone (Egyptians), Defensive (Spartans), Barricade (Vikings).
- Training queues for great buildings use unit ids offset by `+500`.

### Testing Requirements

- Open `build.php` for that gid on an account that can build it and on one that cannot.
- Lint with `./scripts/check.sh php`.

### Common Patterns

- Templates call `$building`, `$technology`, and `$village` methods. They do not embed SQL.
- Time-reduction text for barracks, stable, and workshop must show artifact, hero, and alliance bonus together.

## Dependencies

### Internal

- `build.php`, `GameEngine/Building.php`, `GameEngine/Technology.php`, `GameEngine/Data/buidata.php`.

### External

- Building images under `gpack/*/img/g/`.

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
