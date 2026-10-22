<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Templates

## Purpose

Player-facing views. Page scripts at the repository root include `header.tpl` and `menu.tpl`, then a feature template, then `footer.tpl` and `res.tpl`. Files are PHP with HTML (`.tpl`). They read `$session`, `$village`, `$database`, `$generator`, `$building`, and `$technology`. They do not open their own database connection.

`text.tpl` is generated at runtime and gitignored.

## Key Files

| File | Description |
|------|-------------|
| `header.tpl` / `footer.tpl` / `menu.tpl` | Shell around every in-game page. |
| `res.tpl` | Resource bar. Included at the bottom of page scripts. |
| `Building.tpl` | Shared building frame used by `build.php`. |
| `movement.tpl` | Troop movement summary. |
| `troops.tpl` | Troop list partial. |
| `production.tpl` | Production summary. |
| `multivillage.tpl` | Village switcher. |
| `quest.tpl` | Quest tracker shell. The AJAX body is `Ajax/quest_core.tpl`. |
| `dorf2.tpl` / `field.tpl` | Village center and resource-field markup included by `dorf2.php` and `dorf1.php`. |
| `debug_status.tpl` | Debug status fragment. |
| `news.tpl` | News strip. |
| `hero_header.tpl` | Hero header block. |
| `villageAutocomplete.tpl` | Village name autocomplete markup. |
| `natars.tpl` | Natars-specific fragment. |
| `maintenance_status.tpl` | Maintenance banner. |
| `indexnews.tpl` | Portal news on the login page. |
| `rules.tpl` / `support.tpl` / `links.tpl` | Static content included by the legal and support pages. |
| `version.tpl` | Version line. |
| `text_format.tpl` | Text formatting helper for generated text. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `Build/` | Per-building screens keyed by `gid` (see `Build/AGENTS.md`) |
| `a2b/` | Send-troops unit pickers per tribe (see `a2b/AGENTS.md`) |
| `Alliance/` | Alliance, forum, and medal views (see `Alliance/AGENTS.md`) |
| `Message/` | Inbox, write, sent, archive, notes (see `Message/AGENTS.md`) |
| `Notice/` | Report bodies keyed by report type (see `Notice/AGENTS.md`) |
| `Ranking/` | Statistics tables (see `Ranking/AGENTS.md`) |
| `Profile/` | Profile, preferences, vacation (see `Profile/AGENTS.md`) |
| `Plus/` | Travian Plus screens (see `Plus/AGENTS.md`) |
| `goldClub/` | Farm lists and crop-finder troops (see `goldClub/AGENTS.md`) |
| `Map/` | Map and village popups (see `Map/AGENTS.md`) |
| `Simulator/` | Combat simulator partials (see `Simulator/AGENTS.md`) |
| `Manual/` | In-game manual pages, numeric filenames (see `Manual/AGENTS.md`) |
| `Tutorial/` | Tutorial steps 1–5 (see `Tutorial/AGENTS.md`) |
| `News/` | News boxes and portal home snippets (see `News/AGENTS.md`) |
| `GlobalChat/` | World-chat widget and share-report button (see `GlobalChat/AGENTS.md`) |
| `Ajax/` | AJAX HTML fragments (see `Ajax/AGENTS.md`) |
| `dorf3/` | Multi-village overview partials (see `dorf3/AGENTS.md`) |
| `activate/` | Activation mail view (see `activate/AGENTS.md`) |
| `Anleitung/` | Instructions page fragments (see `Anleitung/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- A new screen is a new include from the root page script, not a new router. If `build.php` or `dorf1.php` does not include the file, it will never render.
- Escape player names, messages, and alliance text. Reflected XSS in `warsim.php` and preferences has already been fixed; do not echo `$_GET` into these templates.
- New copy uses language constants from `GameEngine/Lang/`. Do not add a one-off English sentence.
- Tribe-specific markup must cover tribes 1–3 and 6–9. Unit art and simulators stop at `u90`.
- `index.php` in a subdirectory is a listing guard. Leave it in place.
- Several folders contain `.htaccess` that denies direct HTTP access. Templates are meant to be included, not requested.

### Testing Requirements

- `./scripts/check.sh php` lints `.tpl` files as PHP.
- After a view change, load the page in a browser while logged in, including the empty state (no alliance, no hero item, no reports).

### Common Patterns

- `<?php include("Templates/...") ?>` from the page, and relative includes between templates.
- Building and report templates are selected by integer id: `Templates/Build/{gid}.tpl`, `Templates/Notice/{type}.tpl`.

## Dependencies

### Internal

- Globals prepared by `GameEngine/Generator.php`, `Session.php`, and `Village.php`.
- Strings from `GameEngine/Lang/`.
- Images from `gpack/` and `img/`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
