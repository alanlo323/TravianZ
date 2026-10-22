<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Utils

## Purpose

Stateless helpers used by the engine and by page scripts. The security-sensitive one is `IpResolver`, which decides the client IP and applies IP bans.

## Key Files

| File | Description |
|------|-------------|
| `IpResolver.php` | `App\Utils\IpResolver`. Trusts `REMOTE_ADDR` unless that address is listed in `IP_TRUSTED_PROXIES`. Only then reads `IP_FORWARDED_HEADER` (default `HTTP_X_FORWARDED_FOR`, or `HTTP_CF_CONNECTING_IP` behind Cloudflare). |
| `Math.php` | `App\Utils\Math`. Numeric helpers used by `MYSQLi_DB` and `User`. |
| `DateTime.php` | `App\Utils\DateTime`. Time formatting helpers. Distinct from PHP's `DateTime`. |
| `AccessLogger.php` | `App\Utils\AccessLogger`. Request log lines. Page scripts call `AccessLogger::logRequest()`. |
| `DebugErrorLogger.php` | `App\Utils\DebugErrorLogger`. Server-side error log used by the admin debug screen. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Do not read `X-Forwarded-For` anywhere else. Pages and bans must go through `IpResolver` so a client cannot spoof the header.
- An empty `IP_TRUSTED_PROXIES` behind a reverse proxy makes every visitor look like the proxy. Document that when touching the defaults. Admins and Multihunters are exempt from IP bans; keep that exemption.
- `App\Utils\DateTime` must not be imported as a bare `DateTime` or it will collide with the PHP class.
- Imports stay at the top of the file. These classes already use namespaces.

### Testing Requirements

- `./scripts/check.sh php`.
- For `IpResolver`, reason about direct access, a trusted proxy, and an untrusted client sending a forged forwarded header.

### Common Patterns

- Static methods, no globals except `$_SERVER` inside `IpResolver`.
- Constants they read are defined in generated `GameEngine/config.php`.

## Dependencies

### Internal

- Called from `index.php` and other page scripts (`AccessLogger`) and from ban enforcement (`IpResolver`).
- `Math` is used inside `GameEngine/Database/DatabaseConnectionCore.php`.

### External

- PHP only

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
