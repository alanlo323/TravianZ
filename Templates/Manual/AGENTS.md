<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Manual

## Purpose

In-game manual chapters included by `manual.php`. The filename is the chapter id (`0.tpl`, `11.tpl`, `111.tpl`, `410.tpl`, and so on). Ids are a tree: `11` is a child of `1`, `111` is a child of `11`. They are not a dense sequence.

## Key Files

| File | Description |
|------|-------------|
| `0.tpl` / `00.tpl` | Manual index. |
| `direct.tpl` | Direct-link chapter. |
| `medal.tpl` | Medal explanation. |
| `{id}.tpl` | One chapter. Ids present on disk run through the 1x, 2x, 3x, 4x, 6x, and 11xx–19xx ranges, with gaps. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Add a chapter only when `manual.php` already links that id, or add the link in the same change.
- Write the text with language constants when the string is new. Existing chapters are mostly static HTML.
- Do not renumber a chapter. External links and the in-game menu use these ids.

### Testing Requirements

- Open `manual.php` on the new id and on its parent id.

### Common Patterns

- Numeric filenames. `index.php` is only a directory guard.

## Dependencies

### Internal

- `manual.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
