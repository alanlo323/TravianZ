<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# GameEngine

## Purpose

Server-side rules for TravianZ. Each major system is a global PHP class in this directory. `Database.php` and `Automation.php` are facades: their methods live in traits one level down. `config.php` is created by the installer and gitignored.

## Key Files

| File | Description |
|------|-------------|
| `Database.php` | `MYSQLi_DB` facade. Includes and `use`s the 14 traits in `Database/`. Implements `App\Database\IDbConnection`. |
| `Automation.php` | World tick. Takes a lock file, includes the traits in `Automation/`, and runs battles, movement, training, builds, hero, Natars, medals, and cleanup. |
| `Session.php` | Login session, page access, and the current user. |
| `Village.php` | Active village: production, warehouse, upkeep, and a single resource-tick `UPDATE`. Constructor must stay free of tick side effects; callers use `tick()`. |
| `Building.php` | Building requirements as a declarative table, per-village caches, queues, and demolition. |
| `Technology.php` | Academy and smithy research state. |
| `Units.php` | Unit stats, training, and tribe unit indexes. |
| `Battle.php` | Combat resolution. Hooks `HeroBattleBonus` for item, armor, and speed effects. |
| `Market.php` | Marketplace offers, merchants, and sending resources. Reject negative amounts. |
| `Alliance.php` | Alliance membership, diplomacy, and permissions. |
| `AllianceBonus.php` | T4-style bonuses: troop training speed, culture points, combat strength, merchant capacity. |
| `Artifacts.php` | Artifact ownership and effects. |
| `Account.php` | Registration, activation, deletion, and vacation mode. |
| `Profile.php` | Profile data and preferences. |
| `Message.php` | Player messages and report records. |
| `Chat.php` | Alliance chat. |
| `Ranking.php` | Player, alliance, hero, and village rankings. |
| `Generator.php` | Shared page helpers (time format, links, map math). Included at the top of most page scripts. |
| `Form.php` | Form field helpers. |
| `Protection.php` | Beginner and other protection windows. |
| `PushProtection.php` | Push-protection detection for the admin dashboard. |
| `MultiAccount.php` | Multi-account detection. |
| `RegBlock.php` | Registration blocklist. |
| `GoldShop.php` | Gold shop and promo codes. |
| `QuestConfig.php` | Quest reward values edited from the admin quest page. |
| `Heatmap.php` | Admin world-map heatmap aggregation. |
| `Logging.php` | Admin, village, technology, and troop logs. |
| `Mailer.php` | Outbound mail. |
| `BBCode.php` | Forum and message markup. |
| `Multisort.php` | Array sort helper used by rankings. |
| `functions.php` | Shared procedural helpers. |
| `HeroItems.php` | Equippable T4 hero items. |
| `HeroAdventure.php` | Hero adventure generation and rewards. |
| `HeroAuction.php` | Player-to-player hero item auctions. |
| `HeroBattleBonus.php` | Item combat, per-unit weapons, armor, hunting horn, and movement speed. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `Database/` | Query traits mixed into `MYSQLi_DB` (see `Database/AGENTS.md`) |
| `Automation/` | Tick traits mixed into `Automation` (see `Automation/AGENTS.md`) |
| `Data/` | Static unit, building, hero, and culture tables (see `Data/AGENTS.md`) |
| `Admin/` | Admin session, CSRF, and action scripts (see `Admin/AGENTS.md`) |
| `Lang/` | Interface languages (see `Lang/AGENTS.md`) |
| `Game/` | World Wonder rename endpoint (see `Game/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- Add a method on the trait that already owns that domain. Register a new trait from the facade with `include_once` plus `use`. The autoloader does not load traits.
- Keep method signatures stable. The v11 split was validated by reflection parity; call sites still look like `$database->...` and `$automation->...`.
- Do not put request handling in this directory except `Game/WorldWonderName.php`. Pages stay at the repository root.
- Resource production, culture points, and troop training stack hero helmets with alliance bonuses. Town Hall celebrations are not multiplied by the Philosophy bonus.
- `Building.php` requirements are data. A new `gid` needs a row in that table, a template under `Templates/Build/`, and any tribe exception (Huns use Command Center `gid` 44 instead of Residence or Palace).

### Testing Requirements

- Run `./scripts/check.sh php` from the repository root.
- Behavior changes in battle, market, training, or village ticks need a focused regression script under `tests/` when the logic can run without a live database. Otherwise state which in-game path was checked.

### Common Patterns

- Request-level query cache lives on `MYSQLi_DB`. Mutations go through `invalidateCachesFor()`.
- Automation is single-flight. `Automation.php` exits when the lock file is younger than 60 seconds. `cron.php` refreshes `Prevention/cron_active.txt`.
- Tribe unit ids: `(tribe - 1) * 10 + 1` through `+ 10`. Do not reuse those ids for great-building queues; those use `+500`.

## Dependencies

### Internal

- `Data/` supplies the numeric tables these classes read.
- `src/Utils/Math.php` and `src/Database/IDbConnection.php` are used by the database facade.
- Page scripts construct `Village` and `Session` after `Generator.php`.

### External

- PHP `mysqli`
- Constants from the generated `config.php` (`SQL_SERVER`, table prefix, feature flags)

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
