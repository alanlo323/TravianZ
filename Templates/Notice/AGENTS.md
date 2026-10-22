<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Notice

## Purpose

Report bodies included by `berichte.php`. The filename is the report type returned by `$message->getReportType($type)`. `all.tpl` is the list. Individual files are one report layout each.

## Key Files

| File | Description |
|------|-------------|
| `all.tpl` | Report list, including the attack filter. |
| `1.tpl` / `3.tpl` / `8.tpl` / `9.tpl` / `10.tpl` / `15.tpl` / `22.tpl` / `24.tpl` / `26.tpl` / `27.tpl` | One layout per report type (attacks, reinforcements, trade, and system notices). The number is the type id, not a sequence. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Adding a report type requires `Message::getReportType()` (or the type map it uses) and a matching `{type}.tpl`. A missing file is a failed include.
- Shared report links include `Templates/GlobalChat/share_report_button.tpl` from `berichte.php`. Do not duplicate that button inside every report.

### Testing Requirements

- Open an attack report, a non-combat report, and the filtered list.

### Common Patterns

- Type id in the filename. Gaps in the numbers are normal.

## Dependencies

### Internal

- `berichte.php`, `GameEngine/Message.php`, `DatabaseMessageQueries.php` (`ndata`).

### External

- Report icons under `gpack/*/img/`.

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
