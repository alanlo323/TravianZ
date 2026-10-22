<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Automation

## Purpose

Traits mixed into the `Automation` class. `cron.php` is the production caller. Each trait owns one slice of the world tick: upkeep, movement, battles, training, hero, Natars, medals, and cleanup.

## Key Files

| File | Description |
|------|-------------|
| `AutomationVillageUpkeep.php` | Population, resource production, warehouses, loyalty, oases. |
| `AutomationAccountMaintenance.php` | Deletion, inactive accounts, bans, invitations, climbers. |
| `AutomationBuildQueue.php` | Finished buildings, World Wonder, demolitions, research. |
| `AutomationMarket.php` | Trade routes, marketplace deliveries, merchant returns. |
| `AutomationBattleResolution.php` | `sendunitsComplete` and the battle helpers split out of the old 1700-line function. |
| `AutomationTroopMovements.php` | Reinforcements, returns, settlers. |
| `AutomationTraining.php` | Unit training, hospital healing, celebrations. |
| `AutomationHero.php` | Adventures, regeneration, level-up, revival. |
| `AutomationStarvation.php` | Crop starvation pipeline. |
| `AutomationNatarsWW.php` | Natars, WW villages and plans, active artifacts. |
| `AutomationNatarsWWBuild.php` | Natars raise their own World Wonder on real build times scaled by server speed. Level 100 ends the server. Level 75 recalls Natars troops to defend it. |
| `AutomationMedals.php` | Weekly player and alliance medals, then the statistics reset. |
| `AutomationPlayerStatistics.php` | Rank, population, and army snapshots for Plus graphs. Records every player when `NEW_FUNCTIONS_PLUS_STATISTICS` is on. Interval is `PLUS_STATS_INTERVAL_HOURS`. |
| `AutomationCleanup.php` | Retention deletes for old reports, chat, and stale rows. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Battle completion stays in `AutomationBattleResolution.php`. Do not grow a second copy on `Automation.php`.
- Training time reductions stack artifacts, hero bonuses, and alliance bonuses. Smithy upgrades stack with the combat-strength alliance bonus; they are not the same multiplier.
- Natars do not need to own a WW plan to build. Players do. Keep that split in `AutomationNatarsWWBuild.php`.
- Cleanup retention must stay configurable. Do not hard-delete reports with no age check.
- This code runs without a browser session. Do not read `$_SESSION` here.

### Testing Requirements

- `./scripts/check.sh php` for syntax.
- Tick behavior needs a local database and `cron.php`. The lock file and `Prevention/cron_active.txt` must both be considered or a second tick will no-op.

### Common Patterns

- Traits call other `Automation` methods through `$this`.
- Time comparisons use server speed already baked into the stored finish timestamps. Do not apply speed a second time at completion.

## Dependencies

### Internal

- Included by `GameEngine/Automation.php`.
- Reads `Data/buidata.php`, `Data/unitdata.php`, `Data/hero_full.php`, and `Data/cp.php`.
- Uses `Units`, `Battle`, `AllianceBonus`, `Technology`, `Ranking`, `Building`, and `Artifacts`.

### External

- MariaDB via `MYSQLi_DB`
- Lock file path from `AUTOMATION_LOCK_FILE_NAME` in generated config

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
