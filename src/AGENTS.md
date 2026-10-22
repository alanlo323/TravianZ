<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# src

## Purpose

Newer PHP under the `App\` namespace. `autoloader.php` maps `App\Foo\Bar` to `src/Foo/Bar.php`. This tree is small on purpose. Game rules still live in `GameEngine/` in the global namespace.

## Key Files

None at this level. Code is in the subdirectories. `index.php` only blocks directory listing.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `Database/` | `IDbConnection`, the contract `MYSQLi_DB` implements (see `Database/AGENTS.md`) |
| `Entity/` | `App\Entity\User` (see `Entity/AGENTS.md`) |
| `Utils/` | Math, dates, IP bans, and loggers (see `Utils/AGENTS.md`) |
| `Game/` | Placeholder. Only a directory-listing guard. No `AGENTS.md`. |

## For AI Agents

### Working In This Directory

- New shared code that is not a game rule goes here as `namespace App\...` with imports at the top of the file.
- Do not move `Village`, `Battle`, or the database traits into `App\` as part of an unrelated change. Call sites are global.
- The autoloader also looks in `GameEngine/` for the same class path. A name collision between `src/Foo.php` and `GameEngine/Foo.php` resolves to `src/` first.

### Testing Requirements

- `./scripts/check.sh php`.
- `IpResolver` behavior is specified in `README.md` (direct, reverse proxy, Cloudflare). A change there needs those three cases thought through, because a wrong trusted-proxy check either blocks every player or lets a client spoof the ban IP.

### Common Patterns

- Classes are small and side-effect free except the loggers and `IpResolver::enforce`.
- GameEngine files `use App\Utils\Math` and `use App\Database\IDbConnection` after the autoloader is loaded.

## Dependencies

### Internal

- Loaded by `autoloader.php`. `Database.php` pulls the autoloader in before declaring `MYSQLi_DB`.

### External

- PHP only. No Composer.

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
