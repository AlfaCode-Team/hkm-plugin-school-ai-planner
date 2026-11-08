# Port status — `school.ai_planner`

**Nothing is ported yet. This plugin is a scaffold.**

It declares its domain, its dependencies and an empty published
contract, so a consumer can already name `school.ai_planner` in its
`requires[]` and the boot will accept it. It cannot yet *do* anything:
`Provider::register()` binds no service, and `SchoolAiPlannerContract` has no
methods, so resolving it from a module container throws.

## What has to be ported

| | |
|---|---|
| Legacy source | `ai/ (240 files) — _fiche_schema.php, generate_fiche.php, teacher_preparation.php, teacher_evaluations.php` |
| Legacy tables | `fiche_evaluations, fiche_evaluation_questions, fiche_evaluation_options, fiches_saved, questionnaires, questionnaire_questions, questionnaire_options, elimu_eval_types` |

Those tables are part of the ~50 that have **no DDL anywhere** in the
legacy tree — it was built by hand against a live database. The schema
has to be reconstructed from the queries that read it before any
repository here can be written. That protocol is PORT-PLAN.md §8.

## Order of work

1. Reconstruct the tables above into `database/migrations/` (LetMigrate).
2. Transcribe the pure algorithms from the legacy source into `Domain/`.
3. Add ONE method to `SchoolAiPlannerContract` per use case the outside world needs.
4. Implement it in `Application/Services/`, reading through a repository
   bound with `bindInternal()`.
5. Declare routes in `module.json` — never in PHP.
6. Bind the contract in `Provider::register()`.

Each step is gated: a method is not ported until a test covers it.

## Depends on

- `database.management`
- `http.client`
- `storage.local`
- `school.curriculum`

These are module **domains**. An unknown domain fails the boot.

## The plan this follows

`PORT-PLAN.md` (phases, invariants, schema protocol) and
`PLUGIN-PLAN.md` (the 29-plugin split) in the **ElimuSystem**
repository. Not public.
