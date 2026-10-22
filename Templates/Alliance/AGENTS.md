<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Alliance

## Purpose

Views for `allianz.php`: overview, members, diplomacy, invitations, options, and medals. Forum markup lives in `Forum/`.

## Key Files

| File | Description |
|------|-------------|
| `alli_menu.tpl` / `alliance.tpl` / `overview.tpl` | Alliance menu, public page, and member overview. |
| `forum.tpl` / `linkforum.tpl` | Forum entry that includes `Forum/`. |
| `attacks.tpl` / `attack-filtered.tpl` / `news.tpl` / `chat.tpl` | Shared attacks, filtered attacks, news, alliance chat. |
| `chgdiplo.tpl` / `bonuses.tpl` | Diplomacy editor and alliance bonus display. |
| `invite.tpl` / `kick.tpl` / `quitalli.tpl` | Invite, kick, and leave. |
| `option.tpl` / `assignpos.tpl` / `changename.tpl` / `changepos.tpl` / `allidesc.tpl` | Permissions, position, name, and description. |
| `medal.php` | Medal display. This one is PHP because it renders the medal graphic. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `Forum/` | Category, topic, post, and poll partials (see `Forum/AGENTS.md`) |

## For AI Agents

### Working In This Directory

- Permission checks belong in `GameEngine/Alliance.php` before the include. Hiding a link here is not enough.
- Embassy and bonus text must follow `AllianceBonus.php`: training speed, culture points, combat strength, merchant capacity.

### Testing Requirements

- Open the page as alliance leader, as a member without rights, and as a player with no alliance.

### Common Patterns

- `allianz.php` switches on a query parameter and includes one template.

## Dependencies

### Internal

- `allianz.php`, `GameEngine/Alliance.php`, `GameEngine/Database/DatabaseAllianceQueries.php`, `DatabaseForumQueries.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
