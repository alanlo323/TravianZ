<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Mods

## Purpose

Admin write actions. Each file handles one POST from `Admin/admin.php` or from a form that targets the Mod directly. Reads stay in the panel; this directory changes users, villages, gold, troops, settings, and moderation state.

## Key Files

| File | Description |
|------|-------------|
| `editUser.php` / `editUsername.php` / `editPassword.php` / `editAccess.php` / `editProtection.php` / `editPlus.php` / `editSitter.php` / `editHero.php` / `editHeroT4.php` / `additional.php` | Edit one account: name, password, access, protection, Plus, sitters, both hero systems, extra fields. |
| `editVillageOwner.php` / `renameVillage.php` / `editBuildings.php` / `editResources.php` / `recalcWH.php` | Village owner, name, buildings, resources, warehouse recalculation. |
| `editAli.php` / `delAli.php` | Edit or delete an alliance. |
| `addUsers.php` / `delUser.php` / `addTroops.php` / `addABTroops.php` | Create users, delete a user, grant troops. |
| `gold.php` / `gold_1.php` / `goldPromo.php` / `givePlus.php` / `givePlusRes.php` / `giveResBonus.php` | Gold, promo codes, Plus grants, resource bonuses. |
| `mainteneceBan.php` / `mainteneceUnban.php` / `mainteneceCleanBanData.php` / `mainteneceResetGold.php` / `mainteneceResetPlus.php` / `mainteneceResetPlusBonus.php` | Ban, unban, clean ban rows, reset gold or Plus. Filenames use the historical `maintenece` spelling. |
| `editServerSet.php` / `editPlusSet.php` / `editExtraSet.php` / `editNewFunctions.php` / `editNewsboxSet.php` / `editLogSet.php` / `editCronSet.php` / `editOverall.php` / `editWeek.php` / `editAdminInfo.php` | Writes server, Plus, news, log, cron, and week settings back to config or the database. |
| `blockReg.php` / `pushOverride.php` / `questSave.php` / `debugLog.php` | Registration blocklist, push-protection override, quest editor save, debug log actions. |
| `medals.php` / `delallymedal.php` / `delallymedalbyaid.php` / `delallymedalbyweek.php` / `deletemedalbyweek.php` | Medal grants and deletes. |
| `massmessage.php` / `sendMessage.php` / `sysmessage.php` | Mass mail, direct mail, system message. |
| `cp.php` | Culture-point admin adjustment. |
| `config_template.php` | Template used when settings are rewritten into `GameEngine/config.php`. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Keep one action per file. The panel links to these filenames.
- Verify CSRF and the admin session before the first `UPDATE`. These scripts are directly reachable URLs.
- Do not "fix" the `maintenece` prefix. Templates and `admin.php` still post to that spelling.
- `config_template.php` rewrites the generated config. Preserve every constant the installer writes, including IP-ban and cron keys.
- Troop deletion in `punish` must actually remove units. That path has regressed before.
- Renames belong in `editUsername.php` / the edit-user flow, not in a second user editor.

### Testing Requirements

- Syntax check, then perform the action in the panel as admin.
- Repeat as Multihunter when the tool is supposed to be hidden or read-only.

### Common Patterns

- Include `../csrf.php` and the database bootstrap, then redirect back to `Admin/admin.php?p=...`.
- Log the action through `Logging.php` when the matching admin log already records that tool.

## Dependencies

### Internal

- `GameEngine/Admin/csrf.php`, `database.php`, `function.php`.
- Domain classes such as `QuestConfig`, `GoldShop`, `RegBlock`, `PushProtection`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
