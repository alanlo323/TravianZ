<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Plus

## Purpose

Travian Plus views. `plus.php` includes the low-numbered screens. `plus1.php` includes the `11x` resource-bonus and Plus-feature screens. Gold history (account statement) is also surfaced from this area via `a2b2.php`.

## Key Files

| File | Description |
|------|-------------|
| `pmenu.tpl` | Plus tab menu. |
| `1.tpl`, `2.tpl`, `3.tpl`, `4.tpl`, `5.tpl`, `7.tpl`, `8.tpl`, `9.tpl`, `10.tpl`, `11.tpl`, `12.tpl`, `15.tpl` | Plus screens included by `plus.php`. There is no `6.tpl`, `13.tpl`, or `14.tpl`. |
| `110.tpl`, `111.tpl`, `112.tpl`, `113.tpl`, `3110.tpl` | Screens that exist on disk and are included by `plus1.php`. |
| `114.tpl`, `116.tpl` | Included by `plus1.php`, but those files are not in this directory. |
| `getplus.tpl` / `invite.tpl` | Buy Plus and the invite view. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Gold spending is server-side in `GoldShop.php` and `DatabaseUserQueries.php`. A template must not grant Plus on its own.
- `packages.php` also includes `Plus/1.tpl` and then `Templates/Packages/*.tpl`. There is no `Templates/Packages/` directory in the tree; do not assume those partials exist until you check.
- Graphic statistics for Plus are gated in the UI by an active Plus account. Snapshots themselves are taken for every player in `AutomationPlayerStatistics`.

### Testing Requirements

- Open Plus with and without an active Plus account. Complete a gold action and confirm the balance changed once.

### Common Patterns

- Numeric filenames are feature ids shared with `plus.php` / `plus1.php`.

## Dependencies

### Internal

- `plus.php`, `plus1.php`, `GameEngine/GoldShop.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
