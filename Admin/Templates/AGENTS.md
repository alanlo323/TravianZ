<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Templates

## Purpose

Admin panel views included by `Admin/admin.php`. One template per tool. A few screens are `.php` because they emit a redirect or a one-shot result. `Message/`, `Notice/`, and `report/` are nested partials for inbox and report bodies.

## Key Files

| File | Description |
|------|-------------|
| `login.tpl` / `home.tpl` | Panel login and the statistics home page. |
| `search.tpl` / `search2.tpl` | Player, email, IP, village, and alliance search. Result bodies are `results_*.tpl`. |
| `player.tpl` / `editUser.tpl` | Player detail and the edit-user form (rename, protection, access). |
| `editVillage.tpl` / `village.tpl` / `villages.tpl` | Village edit, detail, and list. |
| `alliance.tpl` / `editAli.tpl` / `delAli.tpl` | Alliance editor. |
| `ban.tpl` / `ban_msg.tpl` / `cleanban.tpl` | Account ban, the ban message, and ban-data cleanup. IP bans are configured on this screen. |
| `blockReg.tpl` | Registration blocklist. |
| `multiacc.tpl` / `pushprot.tpl` | Multi-account detection and push-protection dashboard. |
| `heatmap.tpl` / `map.tpl` / `map_tile.tpl` | World heatmap and map tile tools. |
| `natars.tpl` | Natars management. |
| `questEditor.tpl` | Quest reward editor. |
| `gold.tpl` / `goldShop.tpl` / `usergold.tpl` | Gold grants and the gold shop. |
| `maintenance.tpl` / `resetServer.tpl` / `resetServer.php` / `resetdone.php` | Maintenance mode and server reset. |
| `config.tpl` / `server_info.tpl` | Server settings summary and the server info page. |
| `editPlus.tpl` / `editPlusSet.tpl` / `editServerSet.tpl` / `editExtraSet.tpl` / `editNewFunctions.tpl` / `editNewsboxSet.tpl` / `editLogSet.tpl` / `editCronSet.tpl` | Feature, Plus, news, log, and cron settings. |
| `editHero.tpl` / `editHeroT4.tpl` | Classic hero and T4 hero editors. |
| `admin_log.tpl` / `villagelog.tpl` / `techlog.tpl` / `userillegallog.tpl` | Unified admin, village, technology, and illegal-action logs. |
| `message.tpl` / `massmessage.tpl` / `sysmessage.tpl` | Single message, mass message, system message. |
| `users.tpl` / `online.tpl` / `inactive.tpl` / `deletion.tpl` / `playerdeletion.tpl` | User lists, online, inactive, and deletion queue. |
| `troops.tpl` / `addTroops.tpl` / `addABTroops.tpl` / `punish.tpl` | Troop view, grants, and punish (troop delete). |
| `artifact.tpl` / `playermedals.tpl` / `allymedals.tpl` | Artifacts and medals. |
| `404.tpl` | Unknown `p` value. |

Player sub-panels (`playerinfo.tpl`, `playerheroinfo.tpl`, `playeradditionalinfo.tpl`, `playerplusbonus.tpl`, `editAccess.tpl`, `editProtection.tpl`, `editResources.tpl`, `editPassword.tpl`, `editSitter.tpl`, `editWeek.tpl`, `editOverall.tpl`, `editAdditional.tpl`, `editAdminInfo.tpl`, `givePlus.tpl`, `givePlusRes.tpl`) are sections of the edit-user flow, not separate routes.

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `Message/` | Admin inbox partial (`inbox.tpl`) |
| `Notice/` | Admin report list partial (`all.tpl`) |
| `report/` | Report body partials `0.tpl`, `1.tpl`, `2.tpl` by report type |

## For AI Agents

### Working In This Directory

- Match the `p` value already used in `Admin/admin.php`. Adding a template without a route does nothing.
- Escape player-controlled text. The panel was audited for reflected XSS; new fields must not echo raw names, ban reasons, or log lines.
- Keep Multihunter-visible tools and full-admin tools on the same access split the router already uses.
- `resetServer.php` and `resetdone.php` are executable. Treat them like actions, not like passive markup.

### Testing Requirements

- Open the screen in the panel after a PHP syntax check.
- For a form, submit once with a valid CSRF token and once without.

### Common Patterns

- Templates expect variables set by `admin.php` before the include.
- Nested report templates are chosen by numeric type, same idea as `Templates/Notice/` in the game.

## Dependencies

### Internal

- Rendered only by `Admin/admin.php`.
- Posted forms target `GameEngine/Admin/Mods/`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
