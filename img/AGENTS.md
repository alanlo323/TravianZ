<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# img

## Purpose

Images and a few stylesheets shared outside the graphic packs: portal, registration, tutorial, admin icons, and hero sprite metadata. Pack-specific art stays in `gpack/`.

## Key Files

| File | Description |
|------|-------------|
| `img.css` / `portal_ltr.css` / `travian_basics.css` | Portal and base layout. |
| `hero/mapping.json` | Hero sprite coordinates used with `var/tools/generate_hero_sprites.php`. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `admin/` | Admin icons (`b`, `icon`, `r`) |
| `en/` / `un/` | Localized and neutral UI images |
| `hero/` | Hero sprite sources and `mapping.json` |
| `reg/` | Registration images |
| `rpage/` | Round-page chrome |
| `t4n/` | T4-related images kept outside the packs |
| `tutorial/` | Tutorial art (`elements`, `images`) |
| `bezahlung/` | Payment images |

Leaves under these folders are assets plus listing guards. They have no `AGENTS.md`.

## For AI Agents

### Working In This Directory

- Change `hero/mapping.json` together with the sprite sheet the generator writes.
- Portal CSS here is not the in-game gpack CSS.

### Testing Requirements

- Reload the public index, the registration wizard, and the tutorial after an asset change.

### Common Patterns

- `index.php` listing guards in each folder.

## Dependencies

### Internal

- `index.php`, `anmelden.php`, `tutorial.php`, `var/tools/generate_hero_sprites.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
