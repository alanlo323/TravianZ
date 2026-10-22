<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# activate

## Purpose

Account activation and deletion-confirm screens included by `activate.php`.

## Key Files

| File | Description |
|------|-------------|
| `activate.tpl` | Activation form. |
| `activated.tpl` | Success. |
| `cantfind.tpl` | Unknown activation code. |
| `delete.tpl` | Deletion confirmation. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- The code check lives in `GameEngine/Account.php`. A template must not mark an account active by itself.
- Do not print the activation code back to the page.

### Testing Requirements

- Activate with a valid code, an unknown code, and the deletion path.

### Common Patterns

- One outcome per file. `activate.php` picks the include.

## Dependencies

### Internal

- `activate.php`, `GameEngine/Account.php`.

### External

- None

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
