<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# include

## Purpose

Installer step that creates the first accounts, including Multihunter. Split out of the main process so account inserts stay in one place.

## Key Files

| File | Description |
|------|-------------|
| `accounts.php` | Inserts the installer accounts after the schema exists. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Passwords must be hashed the same way `Account.php` and login expect. Do not store a new plaintext column.
- Multihunter access during installation has broken before. Keep that account's access level on the admin side of the check in `Admin/admin.php`.

### Testing Requirements

- Finish an install and log in as Multihunter and as the admin account the form created.

### Common Patterns

- Included by `install/process.php` after the schema step.

## Dependencies

### Internal

- `install/process.php`, `var/db/struct.sql`, `GameEngine/Account.php` password format.

### External

- MariaDB

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
