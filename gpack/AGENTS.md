<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# gpack

## Purpose

Graphic packs the player can select. `travian_default` is the classic skin. `travian_t4` is the T4-style building skin. Each pack mirrors the same image folders (`img/g` buildings, `img/u` units, `img/m` map, tribe World Wonder frames under `img/g/ww/t{tribe}`, and `lang/en` pack strings). `download/` holds pack archives. `travian/` is the older shared pack with `elements/` and `images/`.

Image directories contain assets plus an `index.php` listing guard. They have no `AGENTS.md`.

## Key Files

| File | Description |
|------|-------------|
| `travian_default/travian.css` | Default pack stylesheet. |
| `travian_t4/` | T4 pack. Building art for gids added in v11 lives here as well as in the default pack. |
| `travian/main.css` | Older shared stylesheet. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `travian_default/` | Default skin, images, and pack language strings |
| `travian_t4/` | T4 skin, same folder layout as the default pack |
| `travian/` | Legacy shared elements |
| `download/` | Downloadable pack archives |

## For AI Agents

### Working In This Directory

- A new unit or building image must be added to both `travian_default` and `travian_t4`, or the inactive pack shows a broken icon.
- World Wonder frames are per tribe under `img/g/ww/t1`, `t2`, `t3`, `t6`, `t7`, `t8`, `t9`. Tribes 4 and 5 (Nature, Natars) do not have player WW frames.
- Do not rename image folders. CSS and templates use short paths (`img/g`, `img/u`, `img/u2`).
- `Admin/gpack/` is a separate copy for the panel. Updating the game pack does not update the admin copy.

### Testing Requirements

- Switch the account gpack preference and reload a village, a building, and the map.

### Common Patterns

- `index.php` in every image folder denies listing. Leave those files in place.

## Dependencies

### Internal

- Selected per player. Templates and `gpack/travian_*/travian.css` reference the relative image paths.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
