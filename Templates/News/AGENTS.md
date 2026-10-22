<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# News

## Purpose

News boxes shown in the game shell and on the portal. The three boxes are separate so an admin news setting can fill one without touching the others.

## Key Files

| File | Description |
|------|-------------|
| `newsbox1.tpl` | First news box. |
| `newsbox2.tpl` | Second news box. |
| `newsbox3.tpl` | Third news box. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `home/` | Portal snippets `home1.tpl`, `home2.tpl`, `home3.tpl` included from the public index. No separate `AGENTS.md`. |

## For AI Agents

### Working In This Directory

- News HTML is admin-editable (`editNewsboxSet`). Escape it on output unless the existing box intentionally allows a limited set of tags.
- `Templates/news.tpl` in the parent directory is the in-game strip. This folder is the box bodies.

### Testing Requirements

- Set a news box in the admin panel and reload the game shell and the public index.

### Common Patterns

- One box per file. Home snippets follow the same 1–3 split.

## Dependencies

### Internal

- `Templates/news.tpl`, `index.php`, admin Mod `editNewsboxSet.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
