<?php

namespace App\Enums\Training;

use BenSampo\Enum\Enum;

/**
 * @method static static TrueFalse()
 * @method static static MultipleChoice()
 * @method static static Manual()
 */
final class TheoryTestQuestionType extends Enum
{
    const TrueFalse = 'truefalse';
    const MultipleChoice = 'multiplechoice';
    const Manual = 'manual';
}
