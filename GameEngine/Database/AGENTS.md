<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Database

## Purpose

Domain traits that make up `MYSQLi_DB`. `Database.php` includes every file here and applies it with `use`. Methods were moved without changing call sites. Traits are in the global namespace.

## Key Files

| File | Description |
|------|-------------|
| `DatabaseConnectionCore.php` | MySQLi connect, `query()`, escaping, query counters, and the generic request cache. |
| `DatabaseUserQueries.php` | Accounts, login, profiles, gold, sitters, vacation, friends. |
| `DatabaseVillageQueries.php` | Villages (`vdata` / `fdata`), oases, resources, fields, celebrations. |
| `DatabaseBuildingQueries.php` | Buildings (`bdata`), build queue, demolition. |
| `DatabaseTroopQueries.php` | Units, training, research, hospital, reinforcements. |
| `DatabaseMovementQueries.php` | Troop movements, attacks, prisoners, farm lists. |
| `DatabaseMarketQueries.php` | Offers, trade routes, merchants. |
| `DatabaseAllianceQueries.php` | Alliances, invitations, diplomacy, embassies. |
| `DatabaseForumQueries.php` | Alliance forum categories, topics, posts, polls. |
| `DatabaseMessageQueries.php` | Messages (`mdata`) and reports (`ndata`). |
| `DatabaseHeroQueries.php` | Hero lookup, updates, XP, death, revival. |
| `DatabaseStatisticsQueries.php` | Rankings, points, medals, statistic counters. |
| `DatabaseArtefactQueries.php` | Artifacts, WW plans, timeline, milestones. |
| `DatabaseGlobalChatQueries.php` | Server-wide world chat and moderation. Separate from alliance chat. |
| `DatabaseSystemQueries.php` | World generation, admin maintenance, and debug queries. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Put a new query in the trait whose header already names that table family. Do not add methods back onto `Database.php`.
- A new trait file must be `include_once`'d and `use`d from `GameEngine/Database.php` or it will not exist on `MYSQLi_DB`.
- Keep SQL in the trait. Callers should not assemble table names.
- Use the configured table prefix. Do not hard-code `s1_`.
- Writes that change a cached row must invalidate that cache in the same method.

### Testing Requirements

- `php -l` via `./scripts/check.sh php`.
- A query change that is reachable from a page should be checked against a local database. These traits are not covered by the zero-dependency tests.

### Common Patterns

- `fetchCached($key, $sql, $fetcher)` in `DatabaseConnectionCore` is the read cache.
- Trait methods are instance methods of `MYSQLi_DB` and may call `$this->query()` and each other.

## Dependencies

### Internal

- Mixed into `MYSQLi_DB` in `GameEngine/Database.php`.
- `App\Utils\Math` for numeric helpers.

### External

- PHP `mysqli`

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
