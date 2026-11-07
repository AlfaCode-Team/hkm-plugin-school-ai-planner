<?php

declare(strict_types=1);

namespace Plugins\SchoolAiPlanner\API\Contracts;

/**
 * Published contract for `school.ai_planner`.
 *
 * AI-assisted lesson sheets (fiches pedagogiques), questionnaires and teacher evaluations.
 *
 * Legacy source : ai/ (240 files) — _fiche_schema.php, generate_fiche.php, teacher_preparation.php, teacher_evaluations.php
 * Legacy tables : fiche_evaluations, fiche_evaluation_questions, fiche_evaluation_options, fiches_saved, questionnaires, questionnaire_questions, questionnaire_options, elimu_eval_types
 *
 * Consumers declare `"requires": ["school.ai_planner"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolAiPlannerContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
