<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Ranking

## Purpose

Statistics views included by `statistiken.php`. Player tables are split by tribe. Alliance, hero, village, World Wonder, and server-milestone tables are separate files.

## Key Files

| File | Description |
|------|-------------|
| `overview.tpl` / `statistics.tpl` / `general.tpl` | Landing and summary tables. |
| `player_1.tpl` / `player_2.tpl` / `player_3.tpl` | Romans, Teutons, Gauls. |
| `player_6.tpl` / `player_7.tpl` / `player_8.tpl` / `player_9.tpl` | Huns, Egyptians, Spartans, Vikings. |
| `player_attack.tpl` / `player_defend.tpl` / `player_top10.tpl` | Offense, defense, and top 10. |
| `alliance.tpl` / `alliance_attack.tpl` / `alliance_defend.tpl` / `ally_top10.tpl` | Alliance rankings. |
| `heroes.tpl` / `villages.tpl` / `ww.tpl` | Heroes, villages, World Wonder. |
| `milestones.tpl` | Server milestones (first village, first artifact, WW progress) and the badge widget. |
| `ranksearch.tpl` | Rank search form. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `_notes/` | Editor notes leftover. Not used at runtime. No `AGENTS.md`. |

## For AI Agents

### Working In This Directory

- A new playable tribe needs `player_{tribeId}.tpl` and a branch in `statistiken.php`. Nature (`4`) and Natars (`5`) have unit partials under `Templates/a2b/` but no `player_4.tpl` or `player_5.tpl`.
- Medal and rank numbers come from `Ranking.php` and `DatabaseStatisticsQueries.php`. Do not recompute them in the template.

### Testing Requirements

- Open each tribe tab plus heroes, villages, WW, and milestones.

### Common Patterns

- Tribe id is the filename suffix, matching `Templates/a2b/units_{id}.tpl`.

## Dependencies

### Internal

- `statistiken.php`, `GameEngine/Ranking.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
