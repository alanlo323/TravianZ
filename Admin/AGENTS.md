<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Admin

## Purpose

Admin panel HTTP front. `admin.php` is the only page players of the panel load. It checks the session, verifies CSRF, and includes a view from `Templates/` plus an action from `GameEngine/Admin/Mods/` when a form is posted.

## Key Files

| File | Description |
|------|-------------|
| `admin.php` | Panel router. Hardens the session cookie (`HttpOnly`, `SameSite=Strict`, `Secure` on HTTPS) before `session_start()`, then includes `GameEngine/Admin/csrf.php`. Entry URL is `/Admin/admin.php`. |
| `ajax.js` | Panel AJAX helpers. |
| `jquery.cookie.js` | Cookie helper used by the panel UI. |
| `welcome.tpl` | Login welcome markup. |
| `.htaccess` | Access rules for this directory. |

## Subdirectories

| Directory | Purpose |
|-----------|---------|
| `Templates/` | Panel HTML views, one file per screen (see `Templates/AGENTS.md`) |
| `gpack/` | Admin copy of the default graphic pack. Image leaves have no `AGENTS.md`. |
| `img/` | Admin-only images (`rpage` and similar). Image leaves have no `AGENTS.md`. |

## For AI Agents

### Working In This Directory

- New panel screens need three pieces: a branch in `admin.php`, a template in `Templates/`, and a POST handler in `GameEngine/Admin/Mods/` when the screen writes data.
- Every state-changing POST must call `csrf_verify()`. Forms must include `csrf_field()`. Helpers live in `GameEngine/Admin/csrf.php` and are shared with Mods that are posted to directly.
- Admins and Multihunters bypass IP bans. Do not let a ban check lock the panel.
- Multihunter access is narrower than full admin. Match the existing access checks in `admin.php` before adding a tool.
- Do not duplicate engine queries in the template. Load data in `admin.php` or the Mod, then render.

### Testing Requirements

- `./scripts/check.sh php`.
- Log in as admin and as Multihunter and open the changed screen. Confirm a missing or stale CSRF token is rejected.

### Common Patterns

- Screen selection is the `p` query parameter (`admin.php?p=ban` and similar).
- Templates are `.tpl` PHP includes, same style as the game views.

## Dependencies

### Internal

- `GameEngine/Admin/` for CSRF, database bootstrap, and Mods.
- `GameEngine/Logging.php`, `MultiAccount.php`, `PushProtection.php`, `Heatmap.php`, `QuestConfig.php` for the newer tools.

### External

- PHP session extension
- The panel's own copies of jQuery cookie and `ajax.js`

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
