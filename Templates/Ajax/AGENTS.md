<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Ajax

## Purpose

HTML fragments returned by `ajax.php` for map scrolling and the quest popup. These are not full pages.

## Key Files

| File | Description |
|------|-------------|
| `mapscroll.tpl` / `mapscroll2.tpl` | Map scroll responses for the normal and large map. |
| `quest_core.tpl` / `quest_core25.tpl` | Quest popup body. `quest_core25.tpl` is the alternate layout. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Keep the response as a fragment. Including `header.tpl` here will break the map client.
- Quest reward numbers come from `QuestConfig.php`. Do not hard-code a reward that the admin editor can change.

### Testing Requirements

- Drag the map and open the quest popup. View the raw AJAX response if the fragment starts rendering a second page shell.

### Common Patterns

- Included from `ajax.php` after the same session bootstrap as a normal page.

## Dependencies

### Internal

- `ajax.php`, `Templates/Map/`, `GameEngine/QuestConfig.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
