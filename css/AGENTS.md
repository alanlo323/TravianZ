<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# css

## Purpose

Small stylesheets that are not inside a graphic pack. Most game CSS ships in `gpack/travian_default/` and `gpack/travian_t4/`.

## Key Files

| File | Description |
|------|-------------|
| `admin_map_tile.css` | Admin map-tile tool. |
| `hero_header.css` | Hero header block. |
| `hero_items.css` | Hero item and inventory layout. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Prefer the active gpack stylesheet when the rule is player-facing and theme-specific. Add a file here only when both `travian_default` and `travian_t4` must share it, or when the screen is admin-only.
- Hero item layout has to survive equipped and empty slots.

### Testing Requirements

- Reload the hero header and the admin map tile after a CSS change. Hard-refresh so the old file is not cached. `.htaccess` sets long cache headers on static assets.

### Common Patterns

- Plain CSS. No preprocessor.

## Dependencies

### Internal

- Included by the hero header template and the admin map screen.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
