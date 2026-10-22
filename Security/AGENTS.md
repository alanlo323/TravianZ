<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# Security

## Purpose

Legacy input and XSS helper, based on the Kohana security library. New request checks (CSRF, IP bans, ownership) live in `GameEngine/Admin/csrf.php` and `src/Utils/IpResolver.php`. Use this class for output encoding and input cleanup, not as the admin auth layer.

## Key Files

| File | Description |
|------|-------------|
| `Security.class.php` | Global `Security` class. Static clean-up and encoding helpers. The `show_source` debug hook is commented out and must stay that way. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Do not re-enable `highlight_file` on a query parameter.
- Admin CSRF and session cookies are not implemented here.
- The file header is Apache-2.0 / Kohana history. The rest of TravianZ uses the project license banner. Leave this file's header as it is when editing the body.

### Testing Requirements

- `./scripts/check.sh php`.
- If a caller starts encoding through this class, check the page for double-encoding.

### Common Patterns

- Static methods, no namespace. Included explicitly by callers. The autoloader looks for `GameEngine/Security.php` and `src/Security.php`, not this path, so a `new Security` will not find this file by itself.

## Dependencies

### Internal

- Included by pages that already call it. Not part of the `App\` autoload map.

### External

- PHP PCRE. `PCRE_UNICODE_PROPERTIES` is set from a runtime probe at the top of the file.

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
