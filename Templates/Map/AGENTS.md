<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Map

## Purpose

World-map markup. `karte.php` uses the normal map. `karte2.php` uses the large map. Both include a village detail popup.

## Key Files

| File | Description |
|------|-------------|
| `mapview.tpl` | Standard map. |
| `mapviewlarge.tpl` | Large map (player preference). |
| `vilview.tpl` | Village or oasis popup. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Tile data comes from the map query helpers. Do not hard-code a table prefix.
- Large-map preference is stored with the other player preferences. Honor it instead of forcing one template.

### Testing Requirements

- Open `karte.php` and `karte2.php`, click a village tile and an oasis tile.

### Common Patterns

- AJAX scrolling uses `Templates/Ajax/mapscroll.tpl` and `mapscroll2.tpl`, not files in this folder.

## Dependencies

### Internal

- `karte.php`, `karte2.php`, map queries on `MYSQLi_DB`.

### External

- Map images under `gpack/*/img/m/`.

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
