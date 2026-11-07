# hkm-plugin-school-ai-planner

> Solves **`school.ai_planner`** · namespace **`Plugins\SchoolAiPlanner\`** · on-demand GDA module
> Family: Elimu / school domain

AI-assisted lesson sheets (fiches pedagogiques), questionnaires and teacher evaluations.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolAiPlannerContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `ai/ (240 files) — _fiche_schema.php, generate_fiche.php, teacher_preparation.php, teacher_evaluations.php` |
| Legacy tables | `fiche_evaluations, fiche_evaluation_questions, fiche_evaluation_options, fiches_saved, questionnaires, questionnaire_questions, questionnaire_options, elimu_eval_types` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `http.client`
- `storage.local`
- `school.curriculum`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.ai_planner"] }
```

```php
$svc = $container->make(\Plugins\SchoolAiPlanner\API\Contracts\SchoolAiPlannerContract::class);
```

## Installing

```bash
hkm plugins enable SchoolAiPlanner <project>
```
