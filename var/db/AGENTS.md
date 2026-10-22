<!-- Parent: ../AGENTS.md -->
<!-- Generated: 2026-10-22 | Updated: 2026-10-22 -->

# db

## Purpose

SQL the installer applies. `struct.sql` is the schema. The other two files seed world data and oasis troop regeneration. Table names in these files use the prefix the installer rewrites.

## Key Files

| File | Description |
|------|-------------|
| `struct.sql` | Tables for users, villages, troops, movements, messages, heroes, artifacts, and the rest of the world. |
| `datagen-world-data.sql` | Generated map and world rows. |
| `datagen-oasis-troops-regen.sql` | Oasis nature-troop regeneration seed. |

## Subdirectories

None.

## For AI Agents

### Working In This Directory

- Change `struct.sql` when a new column is required. Update the matching trait in `GameEngine/Database/` in the same change.
- Keep the installer's prefix replacement working. Do not hard-code a single prefix that only matches a local `s1_` database.
- These files are large generated SQL. Edit the specific `CREATE` or `INSERT` block. Do not reformat the whole file.

### Testing Requirements

- Clean install from `/install` so the schema and both datagen files apply.
- There is no migration runner. An altered `struct.sql` does not update an already installed database.

### Common Patterns

- One statement stream per file. Applied in installer order: structure, world data, croppers.

## Dependencies

### Internal

- `install/process.php`.
- Query traits assume the column names defined here.

### External

- MariaDB / MySQL-compatible SQL

<!-- MANUAL: Any manually added notes below this line are preserved on regeneration -->
